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

    public function login(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
            'password' => 'required|alpha_num|min:8'
        ]);

        if ($validation->fails()) {
            return response()->json(['state' => 'error', 'message' => $validation->errors()->all()]);
        }

        return $this->authService->login(['email' => $request->email, 'password' => $request->password]);
    }

    public function register(Request $request)
    {
        $validationRules = [
            'email' => 'required|unique:users|email|max:100',
            'name' => 'required|string|max:255',
            'password' => 'required|alpha_num|min:8',
        ];

        $validation = Validator::make($request->all(), $validationRules);

        if ($validation->fails()) {
            return response()->json(['state' => 'error', 'message' => $validation->errors()->all()]);
        }


        $userData = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ];


        return $this->authService->register($userData);

    }

    public function logOut(Request $request)
    {
        return $this->authService->logOut();
    }

    public function checkAuth(Request $request)
    {
        return response()->json(['authenticated' => Auth::check()]);
    }
}
