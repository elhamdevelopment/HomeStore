<?php

namespace HomeStore\Http\Controllers\Auth;

use HomeStore\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class AccountController extends Controller
{

    public function changePassword()
    {
        $role = "admin";
        return view('auth.change-password',['role'=>$role]);

    }
}
