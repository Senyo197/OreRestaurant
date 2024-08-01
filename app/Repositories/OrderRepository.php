<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    /**
     * The Order model instance.
     *
     * @var Order
     */
    protected Order $model;

    /**
     * Create a new repository instance.
     *
     * @param Order $order
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->model = $order;
    }

    /**
     * Retrieve all orders.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllOrders(): \Illuminate\Database\Eloquent\Collection
    {
        // Return all orders from the database
        return $this->model->all();
    }

    /**
     * Retrieve an order by its ID.
     *
     * @param int $id
     * @return Order|null
     */
    public function getOrderById(int $id): ?Order
    {
        // Find and return the order by ID
        return $this->model->find($id);
    }

    /**
     * Create a new order with the given data.
     *
     * @param array $data
     * @return Order
     */
    public function createOrder(array $data): Order
    {
        // Create and return a new order
        return $this->model->create($data);
    }
}
