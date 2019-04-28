<?php

namespace HomeStore\Http\Controllers\User;

use Illuminate\Http\Request;
use HomeStore\Http\Controllers\Controller;

class WalletController extends Controller
{
    public function wallet()
    {
        return view('user.wallet');
    }
    public function walletTransaction()
    {
        return view('user.wallet-transaction');
    }
}
