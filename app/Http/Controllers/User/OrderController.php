<?php

namespace HomeStore\Http\Controllers\User;

use HomeStore\Services\user\OrderService;
use HomeStore\Http\Controllers\Controller;

class OrderController extends Controller
{
    protected $orderService;
    public function order()
    {
        return view('user.order-list');
    }

    public function __construct(OrderService $OrderService)
    {
        $this->orderService = $OrderService;
    }

    public function getOrderById($id)
    {
        $userOrder = $this->orderService->getOrderById($id);
        return createJsonResponse(200, 'success', $userOrder);
    }

    public function getOrders()
    {
        $Order = $this->orderService->getUserOrder();
        return createJsonResponse(200, 'success', $Order);

    }
}
