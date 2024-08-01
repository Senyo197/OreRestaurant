<?php

namespace App\Services;

use App\Interfaces\OrderRepositoryInterface;
use Illuminate\Http\JsonResponse;

class OrderService
{
    protected OrderRepositoryInterface $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function placeOrder(array $data): JsonResponse
    {
        $order = $this->orderRepository->createOrder($data);

        if ($order) {
            return response()->json([
                'status' => 'success',
                'message' => 'Order placed successfully.',
                'order' => $order,
            ]);
        }

        return response()->json([
            'status' => 'fail',
            'message' => 'Failed to place order.',
        ]);
    }

    public function getOrderById($id): JsonResponse
    {
        $order = $this->orderRepository->getOrderById($id);

        if ($order) {
            return response()->json([
                'status' => 'success',
                'order' => $order,
            ]);
        }

        return response()->json([
            'status' => 'fail',
            'message' => 'Order not found.',
        ]);
    }

    public function getAllOrders(): JsonResponse
    {
        $orders = $this->orderRepository->getAllOrders();

        return response()->json([
            'status' => 'success',
            'orders' => $orders,
        ]);
    }
}
