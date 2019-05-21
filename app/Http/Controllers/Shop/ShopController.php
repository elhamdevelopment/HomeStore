<?php

namespace EasyShop\Http\Controllers\shop;

use EasyShop\Http\Controllers\Controller;
use EasyShop\Services\shop\ShopService;

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
