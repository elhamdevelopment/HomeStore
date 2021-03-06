<?php

namespace EasyShop\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function indexMarket()
    {
        return view('index-market');
    }
    public function marketProductDetail()
    {
        return view('product-detail');
    }

    public function order()
    {
        return view('order');
    }

    public function restaurants()
    {
        return view('restaurants');
    }
    protected function restaurantDetail()
    {
        return view('restaurant-detail');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }
}
