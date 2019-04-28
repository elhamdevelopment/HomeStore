<?php

namespace HomeStore\Http\Controllers\admin;

use Illuminate\Http\Request;
use HomeStore\Http\Controllers\Controller;

class ProductCategoryManagementController extends Controller
{
    public function index()
    {
        return view('admin.product-category-manage');
    }
}
