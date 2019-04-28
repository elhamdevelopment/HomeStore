<?php

namespace HomeStore\Http\Controllers\admin;

use Illuminate\Http\Request;
use HomeStore\Http\Controllers\Controller;

class ProductManagementController extends Controller
{
    public function index()
    {
        return view('admin.product-manage');
    }
}
