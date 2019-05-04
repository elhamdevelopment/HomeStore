<?php

namespace HomeStore\Http\Controllers\User;

use Illuminate\Http\Request;
use HomeStore\Http\Controllers\Controller;

class WalletController extends Controller
{
    public function wallet()
    {
        $userCredit=12000;//auth()->user()->credit;;
        return view('user.wallet',compact($userCredit));
    }
    public function addCredit()
    {
        //redirect to bank payment
        return view('user.wallet');
    }
    public function walletTransaction()
    {
        return view('user.wallet-transaction');
    }
}
