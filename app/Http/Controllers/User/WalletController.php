<?php

namespace EasyShop\Http\Controllers\User;

use EasyShop\Services\user\WalletService;
use Illuminate\Http\Request;
use EasyShop\Http\Controllers\Controller;

class WalletController extends Controller
{
    protected $walletService;

    public function __construct(WalletService $walletService)
    {
        $this->walletService = $walletService;
    }


    public function wallet()
    {
        $userCredit = 12000;//auth()->user()->credit;;
        return view('user.wallet', compact($userCredit));
    }

    public function walletTransaction()
    {
        return view('user.wallet-transaction');
    }

    public function addCredit(Request $request)
    {
        //redirect to bank payment
        $result = $this->walletService->addCredit($request->all());
        return createJsonResponse(200, 'success', $result);
    }

    public function getWalletTransaction()
    {
        $userWalletTrans = $this->walletService->getWalletTransaction();
        return createJsonResponse(200, 'success', $userWalletTrans);
    }
}
