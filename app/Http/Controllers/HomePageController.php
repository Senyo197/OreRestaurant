<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use App\Services\MenuService;
use App\Services\OrderService;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    protected OrderService $orderService;
    protected MenuService $menuService;

    public function __construct(OrderService $orderService, MenuService $menuService)
    {
        $this->orderService = $orderService;
        $this->menuService = $menuService;
    }

    public function home()
    {
        $users = User::query()->where('user_type', 'user')->get();
        $menus = Menu::query()->get();
        $orders = Order::query()->get();

        return view('admin.home', compact('users', 'menus', 'orders'));
    }

    public function users()
    {
        $users = User::query()->where('user_type', 'user')->paginate(50);
        return view('admin.users.index', compact('users'));
    }
}
