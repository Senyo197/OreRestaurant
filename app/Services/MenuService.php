<?php

namespace App\Services;

use App\Interfaces\MenuRepositoryInterface;
use Illuminate\Http\JsonResponse;

class MenuService
{
    protected MenuRepositoryInterface $menuRepository;

    public function __construct(MenuRepositoryInterface $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function getAllMenus(): JsonResponse
    {
        $menus = $this->menuRepository->getAllMenus();

        return response()->json([
            'status' => 'success',
            'menus' => $menus,
        ]);
    }

    public function getMenuById($id): JsonResponse
    {
        $menu = $this->menuRepository->getMenuById($id);

        if ($menu) {
            return response()->json([
                'status' => 'success',
                'menu' => $menu,
            ]);
        }

        return response()->json([
            'status' => 'fail',
            'message' => 'Menu not found.',
        ]);
    }

    public function createMenu(array $data): JsonResponse
    {
        $menu = $this->menuRepository->createMenu($data);

        if ($menu) {
            return response()->json([
                'status' => 'success',
                'message' => 'Menu created successfully.',
                'menu' => $menu,
            ]);
        }

        return response()->json([
            'status' => 'fail',
            'message' => 'Failed to create menu.',
        ]);
    }

    public function updateMenu($id, array $data): JsonResponse
    {
        $menu = $this->menuRepository->updateMenu($id, $data);

        if ($menu) {
            return response()->json([
                'status' => 'success',
                'message' => 'Menu updated successfully.',
                'menu' => $menu,
            ]);
        }

        return response()->json([
            'status' => 'fail',
            'message' => 'Failed to update menu or menu not found.',
        ]);
    }

    public function deleteMenu($id): JsonResponse
    {
        $result = $this->menuRepository->deleteMenu($id);

        if ($result) {
            return response()->json([
                'status' => 'success',
                'message' => 'Menu deleted successfully.',
            ]);
        }

        return response()->json([
            'status' => 'fail',
            'message' => 'Failed to delete menu or menu not found.',
        ]);
    }

    public function getDiscountedMenus(): JsonResponse
    {
        $menus = $this->menuRepository->getDiscountedMenus();

        return response()->json([
            'status' => 'success',
            'menus' => $menus,
        ]);
    }

    public function getDrinks(): JsonResponse
    {
        $drinks = $this->menuRepository->getDrinks();

        return response()->json([
            'status' => 'success',
            'drinks' => $drinks,
        ]);
    }
}
