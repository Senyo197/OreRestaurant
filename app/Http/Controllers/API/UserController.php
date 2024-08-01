<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\UsersService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $usersService;

    public function __construct(UsersService $usersService)
    {
        $this->usersService = $usersService;
    }

    public function index()
    {
        $users = $this->usersService->getAllUsers();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = $this->usersService->getUserById($id);
        return view('users.show', compact('user'));
    }
}
