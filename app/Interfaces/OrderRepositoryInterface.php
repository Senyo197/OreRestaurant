<?php

namespace App\Interfaces;

use App\Models\Order;

interface OrderRepositoryInterface
{
    /**
     * Retrieve all orders.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllOrders(): \Illuminate\Database\Eloquent\Collection;

    /**
     * Retrieve an order by its ID.
     *
     * @param int $id
     * @return Order|null
     */
    public function getOrderById(int $id): ?Order;

    /**
     * Create a new order with the given data.
     *
     * @param array $data
     * @return Order
     */
    public function createOrder(array $data): Order;
}
