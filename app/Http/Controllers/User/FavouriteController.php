<?php

namespace HomeStore\Http\Controllers\User;

use Illuminate\Http\Request;
use HomeStore\Http\Controllers\Controller;

class FavouriteController extends Controller
{
    public function favourite()
    {
        return view('user.favourite');
    }

}
