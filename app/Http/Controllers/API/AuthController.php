<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Handle user login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // Validate incoming request data
        $validation = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
            'password' => 'required|alpha_num|min:8'
        ]);

        // If validation fails, return error response
        if ($validation->fails()) {
            return response()->json(['state' => 'error', 'message' => $validation->errors()->all()]);
        }

        // Attempt to log in using AuthService
        return $this->authService->login(['email' => $request->email, 'password' => $request->password]);
    }

    /**
     * Handle user registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        // Define validation rules
        $validationRules = [
            'email' => 'required|unique:user|email|max:100',
            'name' => 'required|string|max:255',
            'password' => 'required|alpha_num|min:8',
        ];

        // Validate incoming request data
        $validation = Validator::make($request->all(), $validationRules);

        // If validation fails, return error response
        if ($validation->fails()) {
            return response()->json(['state' => 'error', 'message' => $validation->errors()->all()]);
        }

        // Prepare user data for registration
        $userData = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ];

        // Register the user using AuthService
        return $this->authService->register($userData);
    }

    /**
     * Handle user logout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logOut(Request $request)
    {
        // Log out the user using AuthService
        return $this->authService->logOut();
    }
}
