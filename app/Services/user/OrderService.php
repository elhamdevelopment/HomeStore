<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace EasyShop\Services\user;

use EasyShop\Models\Orders;
use \EasyShop\Repository\Repository;


class OrderService
{
    protected $orderContext;
    protected $order;

    public function __construct(Orders $order)
    {
        $this->order = $order;
        $this->orderContext = new Repository($order);
    }

    public function getUserOrder()
    {
        $user_id = auth()->id();
        return $this->orderContext->whereWith('shop:id,title,logo,total_rate', 'user_id', $user_id);
    }

    public function getOrderById($id)
    {
        $user_id = auth()->id();
        return $this->order->where(['user_id' => 1, 'id' => $id])
            ->with('shops', 'orderDetail', 'orderDetail.products')->first();
    }
}