<?php

namespace HomeStore\Http\Controllers\shop;

use HomeStore\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function addProduct()
    {
        return view('shop.add-product');

    }
}
