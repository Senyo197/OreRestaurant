<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use App\Services\MenuService;
use App\Services\OrderService;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    protected orderService $orderService;
    protected menuService $menuService;

    public function __construct(orderService $OrderService, menuService $MenuService)
    {
        $this->orderService = $OrderService;
        $this->menuService = $MenuService;
    }
    public function home(){
        $users = User::query()->where('user_type', 'user')->get();
        $categories = Menu::query()->get();
        $orders = Order::query()->get();

        return view('admin.home', compact('users', 'menu', 'order'));
    }


    public function users()
    {
        $users = User::query()->where('user_type', 'user')->paginate(50);
        return view('admin.users.index', compact('users'));
    }
}
