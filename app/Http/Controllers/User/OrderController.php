<?php

namespace EasyShop\Http\Controllers\User;

use EasyShop\Services\user\OrderService;
use EasyShop\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;
    public function order()
    {
        return view('user.order-list');
    }
    public function orderDetail()
    {
        return view('user.order-detail');
    }

    public function __construct(OrderService $OrderService)
    {
        $this->orderService = $OrderService;
    }

    public function getOrderById(Request $request)
    {
        $id=$request->input('id');
        $userOrder = $this->orderService->getOrderById($id);
        return createJsonResponse(200, 'success', $userOrder);
    }

    public function getOrders()
    {
        $Order = $this->orderService->getUserOrder();
        return createJsonResponse(200, 'success', $Order);

    }
}
