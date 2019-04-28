<?php

namespace HomeStore\Http\Controllers\User;

use Illuminate\Http\Request;
use HomeStore\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function address()
    {
        return view('user.address-manage');
    }

}
