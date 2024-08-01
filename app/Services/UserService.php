<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;

class UserService
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserById($id): JsonResponse
    {
        $user = $this->userRepository->getUserById($id);

        if ($user) {
            return response()->json([
                'status' => 'success',
                'user' => $user,
            ]);
        }

        return response()->json([
            'status' => 'fail',
            'message' => 'User not found.',
        ]);
    }

    public function getAllUsers(): JsonResponse
    {
        $users = $this->userRepository->getAllUsers();

        return response()->json([
            'status' => 'success',
            'users' => $users,
        ]);
    }

    public function deleteUser($id): JsonResponse
    {
        $result = $this->userRepository->deleteUser($id);

        if ($result) {
            return response()->json([
                'status' => 'success',
                'message' => 'User deleted successfully.',
            ]);
        }

        return response()->json([
            'status' => 'fail',
            'message' => 'Failed to delete user or user not found.',
        ]);
    }
}
