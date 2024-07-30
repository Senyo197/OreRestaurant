<?php


namespace App\Services;

use App\Interfaces\AuthRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    protected AuthRepositoryInterface $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository; 
    }

    public function login(array $credentials): JsonResponse
    {
        $user = $this->authRepository->login($credentials);

        if (!$user || !Hash::check($credentials["password"], $user->password)) {
            return response()->json([
                'status' => 'fail',
                'message' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'user' => $user,
            'status' => 'success',
            'access_token' => $user->createToken('custom-token')->plainTextToken,
        ]);
    }

    public function register(array $userData): JsonResponse
    {
        $user = $this->authRepository->register($userData);

        if ($user) {
            return response()->json([
                'message' => "Account Created Successfully",
                'user' => $user,
                'status' => 'success',
                'access_token' => $user->createToken('custom-token')->plainTextToken,
            ]);
        } else {
            return response()->json(['status' => 'fail', 'message' => "Could not Create Account"]);
        }
    }

    public function logOut(): JsonResponse
    {
        $user = Auth::user();

        if ($user->tokens()->delete()) {
            return response()->json(['message' => 'logged out successfully', 'status' => 'success']);
        } else {
            return response()->json(['message' => 'Error Logging Out', 'status' => 'fail']);
        }
    }
}
