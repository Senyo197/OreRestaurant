<?php

namespace App\Repositories;

use App\Interfaces\MenuRepositoryInterface;
use App\Models\Menu;

class MenuRepository implements MenuRepositoryInterface
{
    protected Menu $model;

    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }

    public function getAllMenus(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model->all();
    }

    public function getMenuById(int $id): ?Menu
    {
        return $this->model->find($id);
    }

    public function createMenu(array $data): Menu
    {
        return $this->model->create($data);
    }

    public function updateMenu(int $id, array $data): ?Menu
    {
        $menu = $this->model->find($id);
        if ($menu) {
            $menu->update($data);
        }
        return $menu;
    }

    public function deleteMenu(int $id): bool
    {
        return $this->model->destroy($id) > 0;
    }

    public function getDiscountedMenus(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model->where('is_discounted', true)->get();
    }

    public function getDrinks(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model->where('type', 'drink')->get();
    }
}
