<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    protected Order $model;

    public function __construct(Order $order)
    {
        $this->model = $order;
    }

    public function getAllOrders(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model->all();
    }

    public function getOrderById(int $id): ?Order
    {
        return $this->model->find($id);
    }

    public function createOrder(array $data): Order
    {
        return $this->model->create($data);
    }
}
