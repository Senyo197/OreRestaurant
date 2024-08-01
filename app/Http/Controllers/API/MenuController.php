<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\MenuService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuController extends Controller
{
    /**
     * The MenuService instance.
     *
     * @var MenuService
     */
    protected $menuService;

    /**
     * Create a new controller instance.
     *
     * @param MenuService $menuService
     * @return void
     */
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    /**
     * Display a listing of all menus.
     *
     * @return View
     */
    public function index()
    {
        $menus = $this->menuService->getAllMenus();
        return view('menus.index', compact('menus'));
    }

    /**
     * Display the specified menu by ID.
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        $menu = $this->menuService->getMenuById($id);
        return view('menus.show', compact('menu'));
    }

    /**
     * Display a listing of discounted menus.
     *
     * @return View
     */
    public function discounted()
    {
        $menus = $this->menuService->getDiscountedMenus();
        return view('menus.discounted', compact('menus'));
    }

    /**
     * Display a listing of drinks.
     *
     * @return View
     */
    public function drinks()
    {
        $menus = $this->menuService->getDrinks();
        return view('menus.drinks', compact('menus'));
    }
}
