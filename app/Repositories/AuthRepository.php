<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterface;
use App\Models\User;

class AuthRepository implements AuthRepositoryInterface
{
    public function login(array $credentials)
    {
        return User::where('email', $credentials["email"])->first();

    }

    public function register(array $userData)
    {
       return User::create($userData);
    }
}
