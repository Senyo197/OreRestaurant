<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\UsersService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * The UsersService instance.
     *
     * @var UsersService
     */
    protected $usersService;

    /**
     * Create a new controller instance.
     *
     * @param UsersService $usersService
     * @return void
     */
    public function __construct(UsersService $usersService)
    {
        $this->usersService = $usersService;
    }

    /**
     * Display a listing of all users.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve all users from the UsersService
        $users = $this->usersService->getAllUsers();

        // Return the view with the list of users
        return view('users.index', compact('users'));
    }

    /**
     * Display the specified user by ID.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Retrieve the user by ID from the UsersService
        $user = $this->usersService->getUserById($id);

        // Return the view with the user's details
        return view('users.show', compact('user'));
    }
}
