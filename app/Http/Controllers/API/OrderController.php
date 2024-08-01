<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\OrdersService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * @var OrdersServiceInterface
     */
    protected $ordersService;

    /**
     * Create a new controller instance.
     *
     * @param OrdersServiceInterface $ordersService
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
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'menu_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $order = $this->ordersService->placeOrder($data);

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
        $order = $this->ordersService->getOrderById($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($order);
    }

    /**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $orders = $this->ordersService->getAllOrders();

        return response()->json($orders);
    }
}
