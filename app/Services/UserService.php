<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;

class UserService
{
    /**
     * The UserRepositoryInterface instance.
     *
     * @var UserRepositoryInterface
     */
    protected UserRepositoryInterface $userRepository;

    /**
     * Create a new UserService instance.
     *
     * @param UserRepositoryInterface $userRepository
     * @return void
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Retrieve a user by their ID.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function getUserById($id): JsonResponse
    {
        // Fetch the user by ID from the repository
        $user = $this->userRepository->getUserById($id);

        if ($user) {
            // Return a JSON response with the user details
            return response()->json([
                'status' => 'success',
                'user' => $user,
            ]);
        }

        // Return a JSON response indicating the user was not found
        return response()->json([
            'status' => 'fail',
            'message' => 'User not found.',
        ]);
    }

    /**
     * Retrieve all users.
     *
     * @return JsonResponse
     */
    public function getAllUsers(): JsonResponse
    {
        // Fetch all users from the repository
        $users = $this->userRepository->getAllUsers();

        // Return a JSON response with all users
        return response()->json([
            'status' => 'success',
            'users' => $users,
        ]);
    }

    /**
     * Delete a user by their ID.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function deleteUser($id): JsonResponse
    {
        // Attempt to delete the user by ID
        $result = $this->userRepository->deleteUser($id);

        if ($result) {
            // Return a JSON response confirming successful deletion
            return response()->json([
                'status' => 'success',
                'message' => 'User deleted successfully.',
            ]);
        }

        // Return a JSON response indicating failure to delete the user
        return response()->json([
            'status' => 'fail',
            'message' => 'Failed to delete user or user not found.',
        ]);
    }
}
