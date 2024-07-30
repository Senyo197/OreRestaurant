<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Services\MenuService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class MenuController extends Controller
{
    protected $menuRepository;

    public function __construct(MenuRepositoryInterface $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function index()
    {
        $menus = $this->menuRepository->getAllMenus();
        return view('menus.index', compact('menus'));
    }

    public function show($id)
    {
        $menu = $this->menuRepository->getMenuById($id);
        return view('menus.show', compact('menu'));
    }

    public function discounted()
    {
        $menus = $this->menuRepository->getDiscountedMenus();
        return view('menus.discounted', compact('menus'));
    }

    public function drinks()
    {
        $menus = $this->menuRepository->getDrinks();
        return view('menus.drinks', compact('menus'));
    }
}
