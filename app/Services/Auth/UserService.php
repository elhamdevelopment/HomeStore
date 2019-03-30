<?php
/**
 * Created by PhpStorm.
 * User: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace HomeStore\Services\Auth;

use HomeStore\Models\Users;
use \HomeStore\Repository\Repository;


class UserService
{
    protected $userContext;
    protected $roleContext;
    protected $repository;

    public function __construct(Users $users)
    {
        $this->userContext = new Repository($users);
    }

    public function get()
    {
        return $this->userContext->all();
    }

    public function CreateUser(array $data)
    {
        $user = $this->userContext->create($data);
        $this->userContext->save();
        return $user;
    }

    public function delete($id)
    {
        $this->roleContext->delete($id);
        if ($id != 0) {
            $this->roleContext->delete($id);
        } else
            throw new Exception('id not valid.');
    }
}