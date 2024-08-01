<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\MenusService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuController extends Controller
{
    protected $menusService;

    public function __construct(MenuService $menuService)
    {
        $this->menusService = $menusService;
    }

    public function index()
    {
        $menus = $this->menusService->getAllMenus();
        return view('menus.index', compact('menus'));
    }

    public function show($id)
    {
        $menu = $this->menusService->getMenuById($id);
        return view('menus.show', compact('menu'));
    }

    public function discounted()
    {
        $menus = $this->menusService->getDiscountedMenus();
        return view('menus.discounted', compact('menus'));
    }

    public function drinks()
    {
        $menus = $this->menusService->getDrinks();
        return view('menus.drinks', compact('menus'));
    }
}
