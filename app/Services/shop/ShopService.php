<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/12/2019
 * Time: 10:42 PM
 */

namespace HomeStore\Services\shop;


use HomeStore\Models\Shops;
use HomeStore\Repository\Repository;

class ShopService
{
    protected $shopContext;

    public function __construct(Shops $shop)
    {
        $this->shopContext = new Repository($shop);
    }

    public function getUserShop()
    {
        $user_id = auth()->id();
        $this->shopContext->findBy('user_id', $user_id);
    }
    public function updateAddress(array $data)
    {
        $user_id = auth()->id();
        return $this->shopContext->update($data, $user_id);
    }
}