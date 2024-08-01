<?php

namespace App\Services;

use App\Interfaces\AuthRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    /**
     * The AuthRepositoryInterface instance.
     *
     * @var AuthRepositoryInterface
     */
    protected AuthRepositoryInterface $authRepository;

    /**
     * Create a new AuthService instance.
     *
     * @param AuthRepositoryInterface $authRepository
     * @return void
     */
    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository; 
    }

    /**
     * Attempt to log a user in with the given credentials.
     *
     * @param array $credentials
     * @return JsonResponse
     */
    public function login(array $credentials): JsonResponse
    {
        // Attempt to find the user with the given email
        $user = $this->authRepository->login($credentials);

        // Check if user exists and password is correct
        if (!$user || !Hash::check($credentials["password"], $user->password)) {
            return response()->json([
                'status' => 'fail',
                'message' => ['The provided credentials are incorrect.'],
            ]);
        }

        // Generate and return a new access token for the user
        return response()->json([
            'user' => $user,
            'status' => 'success',
            'access_token' => $user->createToken('custom-token')->plainTextToken,
        ]);
    }

    /**
     * Register a new user with the given data.
     *
     * @param array $userData
     * @return JsonResponse
     */
    public function register(array $userData): JsonResponse
    {
        // Attempt to create a new user
        $user = $this->authRepository->register($userData);

        // Check if user was created successfully
        if ($user) {
            return response()->json([
                'message' => "Account Created Successfully",
                'user' => $user,
                'status' => 'success',
                'access_token' => $user->createToken('custom-token')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => 'fail', 
                'message' => "Could not Create Account"
            ]);
        }
    }

    /**
     * Log out the currently authenticated user.
     *
     * @return JsonResponse
     */
    public function logOut(): JsonResponse
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Attempt to delete all of the user's tokens
        if ($user->tokens()->delete()) {
            return response()->json([
                'message' => 'Logged out successfully',
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'message' => 'Error Logging Out',
                'status' => 'fail'
            ]);
        }
    }
}
