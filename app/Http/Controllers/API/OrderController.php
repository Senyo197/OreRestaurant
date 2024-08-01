<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\OrdersService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * The OrdersService instance.
     *
     * @var OrdersService
     */
    protected $ordersService;

    /**
     * Create a new controller instance.
     *
     * @param OrdersService $ordersService
     * @return void
     */
    public function __construct(OrdersService $ordersService)
    {
        $this->ordersService = $ordersService;
    }

    /**
     * Store a newly created order in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'menu_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Place the order using the OrdersService
        $order = $this->ordersService->placeOrder($data);

        // Return a JSON response with the created order
        return response()->json($order, Response::HTTP_CREATED);
    }

    /**
     * Display the specified order.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // Retrieve the order by ID
        $order = $this->ordersService->getOrderById($id);

        // If the order is not found, return a not found response
        if (!$order) {
            return response()->json(['message' => 'Order not found'], Response::HTTP_NOT_FOUND);
        }

        // Return the order as a JSON response
        return response()->json($order);
    }

    /**
     * Display a listing of all orders.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Retrieve all orders
        $orders = $this->ordersService->getAllOrders();

        // Return the list of orders as a JSON response
        return response()->json($orders);
    }
}
