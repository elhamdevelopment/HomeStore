<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace EasyShop\Services\user;

use EasyShop\Models\UserWallet;
use \EasyShop\Repository\Repository;


class WalletService
{
    protected $walletContext;
    protected $repository;

    public function __construct(UserWallet $Wallet)
    {
        $this->walletContext = new Repository($Wallet);
    }

    public function getWalletTransaction()
    {
        $user_id = auth()->id();
        return $this->walletContext->findAllBy('user_id',$user_id);
    }

    public function addCredit(array $credit)
    {
        $user_id = auth()->id();
        return $this->walletContext->create($credit);
    }
}