<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace HomeStore\Services\user;

use HomeStore\Models\UserAddress;
use \HomeStore\Repository\Repository;


class SupportService
{
    protected $supportContext;
    protected $repository;

    public function __construct()
    {
//        $this->supportContext = new Repository($address);
    }

    public function addSupport(array $data)
    {
        $user_id = auth()->id();
        $data += ["user_id" => $user_id];
        $address = $this->supportContext->create($data);
        $this->supportContext->save();
        return $address;
    }

}