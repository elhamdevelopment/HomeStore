<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace HomeStore\Services\user;

use HomeStore\Models\Orders;
use \HomeStore\Repository\Repository;


class OrderService
{
    protected $orderContext;

    public function __construct(Orders $order)
    {
        $this->orderContext = new Repository($order);
    }

    public function getUserOrder()
    {
        $user_id = auth()->id();
        return $this->orderContext->with('Shops')->findAllBy('user_id',$user_id);
    }

    public function getOrderById($id)
    {
        $user_id = auth()->id();
        return $this->orderContext->with('Shops:photos,title')->findWhere(['user_id'=>$user_id, 'id'=>$id]);

    }
}