<?php

namespace App\Services;


use App\Interfaces\OrderRepositoryInterface;

class OrderService implements OrderServiceInterface
{
    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function placeOrder(array $data)
    {
        return $this->orderRepository->createOrder($data);
    }

    public function getOrderById($id)
    {
        return $this->orderRepository->getOrderById($id);
    }

    public function getAllOrders()
    {
        return $this->orderRepository->getAllOrders();
    }
}
