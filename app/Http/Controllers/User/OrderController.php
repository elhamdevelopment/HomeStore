<?php

namespace HomeStore\Http\Controllers\User;

use Illuminate\Http\Request;
use HomeStore\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function order()
    {
        return view('user.order-list');
    }

}
