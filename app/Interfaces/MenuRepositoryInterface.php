<?php

namespace App\Interfaces;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Collection;

interface MenuRepositoryInterface
{
    public function getAllMenus(): Collection;
    public function getMenuById(int $id): ?Menu;
    public function createMenu(array $data): Menu;
    public function updateMenu(int $id, array $data): ?Menu;
    public function deleteMenu(int $id): bool;
    public function getDiscountedMenus(): Collection;
    public function getDrinks(): Collection;
}
