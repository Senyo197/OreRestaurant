<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    /**
     * The User model instance.
     *
     * @var User
     */
    protected User $model;

    /**
     * Create a new repository instance.
     *
     * @param User $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * Retrieve all users.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllUsers(): \Illuminate\Database\Eloquent\Collection
    {
        // Return all users from the database
        return $this->model->all();
    }

    /**
     * Retrieve a user by their ID.
     *
     * @param int $id
     * @return User|null
     */
    public function getUserById(int $id): ?User
    {
        // Find and return the user by ID
        return $this->model->find($id);
    }

    /**
     * Delete a user by their ID.
     *
     * @param int $id
     * @return bool
     */
    public function deleteUser(int $id): bool
    {
        // Delete the user by ID and return whether it was successful
        return $this->model->destroy($id) > 0;
    }
}
