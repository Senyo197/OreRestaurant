<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    protected $model;

    public function __construct(Order $order)
    {
        $this->model = $order;
    }

    public function getAllOrders()
    {
        return $this->model->all();
    }

    public function getOrderById($id)
    {
        return $this->model->find($id);
    }

    public function createOrder(array $data)
    {
        return $this->model->create($data);
    }
}
