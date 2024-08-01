<?php

namespace App\Services;

use App\Interfaces\OrderRepositoryInterface;
use Illuminate\Http\JsonResponse;

class OrderService
{
    /**
     * The OrderRepositoryInterface instance.
     *
     * @var OrderRepositoryInterface
     */
    protected OrderRepositoryInterface $orderRepository;

    /**
     * Create a new OrderService instance.
     *
     * @param OrderRepositoryInterface $orderRepository
     * @return void
     */
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * Place a new order with the provided data.
     *
     * @param array $data
     * @return JsonResponse
     */
    public function placeOrder(array $data): JsonResponse
    {
        // Create a new order using the repository
        $order = $this->orderRepository->createOrder($data);

        if ($order) {
            // Return a JSON response confirming the order was placed successfully
            return response()->json([
                'status' => 'success',
                'message' => 'Order placed successfully.',
                'order' => $order,
            ]);
        }

        // Return a JSON response indicating failure to place the order
        return response()->json([
            'status' => 'fail',
            'message' => 'Failed to place order.',
        ]);
    }

    /**
     * Retrieve an order by its ID.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function getOrderById($id): JsonResponse
    {
        // Fetch the order by ID from the repository
        $order = $this->orderRepository->getOrderById($id);

        if ($order) {
            // Return a JSON response with the order details
            return response()->json([
                'status' => 'success',
                'order' => $order,
            ]);
        }

        // Return a JSON response indicating the order was not found
        return response()->json([
            'status' => 'fail',
            'message' => 'Order not found.',
        ]);
    }

    /**
     * Retrieve all orders.
     *
     * @return JsonResponse
     */
    public function getAllOrders(): JsonResponse
    {
        // Fetch all orders from the repository
        $orders = $this->orderRepository->getAllOrders();

        // Return a JSON response with all orders
        return response()->json([
            'status' => 'success',
            'orders' => $orders,
        ]);
    }
}
