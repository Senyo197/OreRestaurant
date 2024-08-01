<?php

namespace App\Interfaces;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Collection;

interface MenuRepositoryInterface
{
    /**
     * Retrieve all menus.
     *
     * @return Collection
     */
    public function getAllMenus(): Collection;

    /**
     * Retrieve a menu by its ID.
     *
     * @param int $id
     * @return Menu|null
     */
    public function getMenuById(int $id): ?Menu;

    /**
     * Create a new menu with the given data.
     *
     * @param array $data
     * @return Menu
     */
    public function createMenu(array $data): Menu;

    /**
     * Update an existing menu by its ID with the given data.
     *
     * @param int $id
     * @param array $data
     * @return Menu|null
     */
    public function updateMenu(int $id, array $data): ?Menu;

    /**
     * Delete a menu by its ID.
     *
     * @param int $id
     * @return bool
     */
    public function deleteMenu(int $id): bool;

    /**
     * Retrieve all menus with discounts.
     *
     * @return Collection
     */
    public function getDiscountedMenus(): Collection;

    /**
     * Retrieve all drink menus.
     *
     * @return Collection
     */
    public function getDrinks(): Collection;
}
