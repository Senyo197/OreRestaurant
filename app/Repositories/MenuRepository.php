<?php

namespace App\Repositories;

use App\Interfaces\MenuRepositoryInterface;
use App\Models\Menu;

class MenuRepository implements MenuRepositoryInterface
{
    /**
     * The Menu model instance.
     *
     * @var Menu
     */
    protected Menu $model;

    /**
     * Create a new repository instance.
     *
     * @param Menu $menu
     * @return void
     */
    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }

    /**
     * Retrieve all menus.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllMenus(): \Illuminate\Database\Eloquent\Collection
    {
        // Return all menus from the database
        return $this->model->all();
    }

    /**
     * Retrieve a menu by its ID.
     *
     * @param int $id
     * @return Menu|null
     */
    public function getMenuById(int $id): ?Menu
    {
        // Find and return the menu by ID
        return $this->model->find($id);
    }

    /**
     * Create a new menu with the given data.
     *
     * @param array $data
     * @return Menu
     */
    public function createMenu(array $data): Menu
    {
        // Create and return a new menu
        return $this->model->create($data);
    }

    /**
     * Update an existing menu by its ID with the given data.
     *
     * @param int $id
     * @param array $data
     * @return Menu|null
     */
    public function updateMenu(int $id, array $data): ?Menu
    {
        // Find the menu by ID and update it with the given data
        $menu = $this->model->find($id);
        if ($menu) {
            $menu->update($data);
        }
        return $menu;
    }

    /**
     * Delete a menu by its ID.
     *
     * @param int $id
     * @return bool
     */
    public function deleteMenu(int $id): bool
    {
        // Delete the menu by ID and return whether it was successful
        return $this->model->destroy($id) > 0;
    }

    /**
     * Retrieve all menus with discounts.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getDiscountedMenus(): \Illuminate\Database\Eloquent\Collection
    {
        // Return all discounted menus
        return $this->model->where('is_discounted', true)->get();
    }

    /**
     * Retrieve all menus of type 'drink'.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getDrinks(): \Illuminate\Database\Eloquent\Collection
    {
        // Return all menus where the type is 'drink'
        return $this->model->where('type', 'drink')->get();
    }
}
