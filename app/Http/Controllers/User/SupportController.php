<?php

namespace HomeStore\Http\Controllers\User;

use Illuminate\Http\Request;
use HomeStore\Http\Controllers\Controller;

class SupportController extends Controller
{
    public function support()
    {
        return view('user.support-contact');
    }

}
