<?php

namespace App\Interfaces;

use App\Models\Order;

interface OrderRepositoryInterface
{
    public function getAllOrders(): \Illuminate\Database\Eloquent\Collection;
    public function getOrderById(int $id): ?Order;
    public function createOrder(array $data): Order;
}
