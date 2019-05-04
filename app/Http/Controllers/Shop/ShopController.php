<?php

namespace HomeStore\Http\Controllers\shop;

use HomeStore\Http\Controllers\Controller;
use HomeStore\Services\shop\ShopService;

class ShopController extends Controller
{
    protected $shopService;

    public function __construct(ShopService $shopService)
    {
        $this->shopService = $shopService;
    }

    public function showEditShop()
    {
        return view('shop.edit-shop');

    }

    public function getUserShop()
    {
        $this->shopService->getUserShop();
    }
}
