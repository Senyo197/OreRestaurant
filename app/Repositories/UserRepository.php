<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected User $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getAllUsers(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model->all();
    }

    public function getUserById(int $id): ?User
    {
        return $this->model->find($id);
    }

    public function deleteUser(int $id): bool
    {
        return $this->model->destroy($id) > 0;
    }
}
