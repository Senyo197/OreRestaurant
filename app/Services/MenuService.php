<?php

namespace App\Services;

use App\Interfaces\MenuRepositoryInterface;
use Illuminate\Http\JsonResponse;

class MenuService
{
    /**
     * The MenuRepositoryInterface instance.
     *
     * @var MenuRepositoryInterface
     */
    protected MenuRepositoryInterface $menuRepository;

    /**
     * Create a new MenuService instance.
     *
     * @param MenuRepositoryInterface $menuRepository
     * @return void
     */
    public function __construct(MenuRepositoryInterface $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    /**
     * Retrieve all menus.
     *
     * @return JsonResponse
     */
    public function getAllMenus(): JsonResponse
    {
        // Fetch all menus from the repository
        $menus = $this->menuRepository->getAllMenus();

        // Return a JSON response with the menus
        return response()->json([
            'status' => 'success',
            'menus' => $menus,
        ]);
    }

    /**
     * Retrieve a menu by its ID.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function getMenuById($id): JsonResponse
    {
        // Fetch the menu by ID from the repository
        $menu = $this->menuRepository->getMenuById($id);

        if ($menu) {
            // Return a JSON response with the menu
            return response()->json([
                'status' => 'success',
                'menu' => $menu,
            ]);
        }

        // Return a JSON response indicating the menu was not found
        return response()->json([
            'status' => 'fail',
            'message' => 'Menu not found.',
        ]);
    }

    /**
     * Create a new menu with the provided data.
     *
     * @param array $data
     * @return JsonResponse
     */
    public function createMenu(array $data): JsonResponse
    {
        // Create a new menu using the repository
        $menu = $this->menuRepository->createMenu($data);

        if ($menu) {
            // Return a JSON response confirming the menu was created
            return response()->json([
                'status' => 'success',
                'message' => 'Menu created successfully.',
                'menu' => $menu,
            ]);
        }

        // Return a JSON response indicating failure to create the menu
        return response()->json([
            'status' => 'fail',
            'message' => 'Failed to create menu.',
        ]);
    }

    /**
     * Update an existing menu by its ID with the provided data.
     *
     * @param int $id
     * @param array $data
     * @return JsonResponse
     */
    public function updateMenu($id, array $data): JsonResponse
    {
        // Update the menu using the repository
        $menu = $this->menuRepository->updateMenu($id, $data);

        if ($menu) {
            // Return a JSON response confirming the menu was updated
            return response()->json([
                'status' => 'success',
                'message' => 'Menu updated successfully.',
                'menu' => $menu,
            ]);
        }

        // Return a JSON response indicating failure to update the menu
        return response()->json([
            'status' => 'fail',
            'message' => 'Failed to update menu or menu not found.',
        ]);
    }

    /**
     * Delete a menu by its ID.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function deleteMenu($id): JsonResponse
    {
        // Attempt to delete the menu using the repository
        $result = $this->menuRepository->deleteMenu($id);

        if ($result) {
            // Return a JSON response confirming the menu was deleted
            return response()->json([
                'status' => 'success',
                'message' => 'Menu deleted successfully.',
            ]);
        }

        // Return a JSON response indicating failure to delete the menu
        return response()->json([
            'status' => 'fail',
            'message' => 'Failed to delete menu or menu not found.',
        ]);
    }

    /**
     * Retrieve all discounted menus.
     *
     * @return JsonResponse
     */
    public function getDiscountedMenus(): JsonResponse
    {
        // Fetch all discounted menus from the repository
        $menus = $this->menuRepository->getDiscountedMenus();

        // Return a JSON response with the discounted menus
        return response()->json([
            'status' => 'success',
            'menus' => $menus,
        ]);
    }

    /**
     * Retrieve all drinks from the menu.
     *
     * @return JsonResponse
     */
    public function getDrinks(): JsonResponse
    {
        // Fetch all drinks from the repository
        $drinks = $this->menuRepository->getDrinks();

        // Return a JSON response with the drinks
        return response()->json([
            'status' => 'success',
            'drinks' => $drinks,
        ]);
    }
}
