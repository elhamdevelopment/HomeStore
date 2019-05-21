<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace EasyShop\Services\user;

use EasyShop\Models\Support;
use EasyShop\Models\UserAddress;
use \EasyShop\Repository\Repository;


class SupportService
{
    protected $supportContext;
    protected $repository;

    public function __construct(Support $support)
    {
        $this->supportContext = new Repository($support);
    }

    public function addSupport(array $data)
    {
        $user_id = auth()->id();
        $data += ["user_id" => $user_id];
        $support = $this->supportContext->create($data);
        $this->supportContext->save();
        return $support;
    }

}