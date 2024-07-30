<?php
namespace App\Repositories;

interface OrderRepositoryInterface
{
    public function getAllOrders();
    public function getOrderById($id);
    public function createOrder(array $data);
}
