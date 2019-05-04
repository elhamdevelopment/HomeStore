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


class AddressService
{
    protected $addressContext;
    protected $repository;

    public function __construct(UserAddress $address)
    {
        $this->addressContext = new Repository($address);
    }

    public function getUserAddress()
    {
        $user_id = auth()->id();
        return $this->addressContext->findAllBy('user_id',$user_id);
    }

    public function updateAddress(array $data)
    {
        $user_id = auth()->id();
        return $this->addressContext->update($data, $user_id);
    }

    public function addAddress(array $data)
    {
        $user_id = auth()->id();
        $data += ["user_id" => $user_id];
        $address = $this->addressContext->create($data);
        $this->addressContext->save();
        return $address;
    }


    public function deleteAddress($id)
    {
        if ($id != 0) {
           return $this->addressContext->delete($id);
        } else
            throw new Exception('بروز خطا در سسیتم.');
    }
}