<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getAllUsers()
    {
        return $this->model->all();
    }

    public function getUserById($id)
    {
        return $this->model->find($id);
    }

    public function deleteUser($id)
    {
        return $this->model->destroy($id);
    }
}
