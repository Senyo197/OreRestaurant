<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class OrderController extends Controller
{
    /**
     * @var OrderServiceInterface
     */
    protected $orderService;

    /**
     * Create a new controller instance.
     *
     * @param OrderServiceInterface $orderService
     * @return void
     */
    public function __construct(OrderServiceInterface $orderService)
    {
        $this->orderService = $orderService;
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

        $order = $this->orderService->placeOrder($data);

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
        $order = $this->orderService->getOrderById($id);

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
        $orders = $this->orderService->getAllOrders();

        return response()->json($orders);
    }
}
