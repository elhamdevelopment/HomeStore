<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace EasyShop\Services\user;

use EasyShop\Models\UserAddress;
use \EasyShop\Repository\Repository;
use mysql_xdevapi\Exception;


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
        return $this->addressContext->findAllBy('user_id', $user_id);
    }

    public function getUserAddressById($id)
    {
        $user_id = auth()->id();
        if ($id != 0) {
            return $this->addressContext->getByCondition(['user_id' => $user_id, 'id' => $id]);
        } else
            throw  new Exception('not found');

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