<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    /**
     * Retrieve all users.
     *
     * @return mixed
     */
    public function getAllUsers();

    /**
     * Retrieve a user by their ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getUserById($id);

    /**
     * Delete a user by their ID.
     *
     * @param int $id
     * @return bool
     */
    public function deleteUser($id);
}
