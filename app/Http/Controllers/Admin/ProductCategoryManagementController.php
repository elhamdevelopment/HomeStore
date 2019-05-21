<?php

namespace EasyShop\Http\Controllers\admin;

use Illuminate\Http\Request;
use EasyShop\Http\Controllers\Controller;

class ProductCategoryManagementController extends Controller
{
    public function index()
    {
        return view('admin.product-category-manage');
    }
}
