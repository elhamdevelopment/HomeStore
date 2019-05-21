<?php

namespace EasyShop\Http\Controllers\shop;

use EasyShop\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function addProduct()
    {
        return view('shop.add-product');

    }
}
