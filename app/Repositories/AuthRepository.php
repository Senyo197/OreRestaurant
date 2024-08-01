<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterface;
use App\Models\User;

class AuthRepository implements AuthRepositoryInterface
{
    /**
     * Attempt to log a user in with the given credentials.
     *
     * @param array $credentials
     * @return User|null
     */
    public function login(array $credentials)
    {
        // Retrieve the user by email
        return User::where('email', $credentials["email"])->first();
    }

    /**
     * Register a new user with the given data.
     *
     * @param array $userData
     * @return User
     */
    public function register(array $userData)
    {
        // Create and return a new user
        return User::create($userData);
    }
}
