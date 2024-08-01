<?php

namespace App\Interfaces;

interface AuthRepositoryInterface
{
    /**
     * Attempt to log a user in with the given credentials.
     *
     * @param array $credentials
     * @return mixed
     */
    public function login(array $credentials);

    /**
     * Register a new user with the given data.
     *
     * @param array $userData
     * @return mixed
     */
    public function register(array $userData);
}
