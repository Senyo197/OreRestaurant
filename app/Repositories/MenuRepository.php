<?php

namespace App\Repositories;

use App\Interfaces\MenuRepositoryInterface;
use App\Models\Menu;


class MenuRepository implements MenuRepositoryInterface
{
    protected $model;

    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }

    public function getAllMenus()
    {
        return $this->model->all();
    }

    public function getMenuById($id)
    {
        return $this->model->find($id);
    }

    public function createMenu(array $data)
    {
        return $this->model->create($data);
    }

    public function updateMenu($id, array $data)
    {
        $menu = $this->model->find($id);
        $menu->update($data);
        return $menu;
    }

    public function deleteMenu($id)
    {
        return $this->model->destroy($id);
    }

    public function getDiscountedMenus()
    {
        return $this->model->where('is_discounted', true)->get();
    }

    public function getDrinks()
    {
        return $this->model->where('type', 'drink')->get();
    }
}
