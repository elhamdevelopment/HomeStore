<?php

namespace HomeStore\Http\Controllers\shop;

use HomeStore\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ShopController extends Controller
{

    public function editShop()
    {
        return view('shop.edit-shop');

    }
}
