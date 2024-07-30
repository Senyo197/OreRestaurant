<?php

namespace App\Services;


use App\Interfaces\MenuRepositoryInterface;

class MenuService implements MenuServiceInterface
{
    protected $menuRepository;

    public function __construct(MenuRepositoryInterface $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function getAllMenus()
    {
        return $this->menuRepository->getAllMenus();
    }

    public function getMenuById($id)
    {
        return $this->menuRepository->getMenuById($id);
    }

    public function createMenu(array $data)
    {
        return $this->menuRepository->createMenu($data);
    }

    public function updateMenu($id, array $data)
    {
        return $this->menuRepository->updateMenu($id, $data);
    }

    public function deleteMenu($id)
    {
        return $this->menuRepository->deleteMenu($id);
    }

    public function getDiscountedMenus()
    {
        return $this->menuRepository->getDiscountedMenus();
    }

    public function getDrinks()
    {
        return $this->menuRepository->getDrinks();
    }
}
