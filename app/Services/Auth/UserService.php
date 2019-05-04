<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace HomeStore\Services\Auth;

use HomeStore\Models\Roles;
use HomeStore\Models\Users;
use \HomeStore\Repository\Repository;
use Illuminate\Support\Facades\Hash;


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

    public function changePassword(array $password)
    {
        $user_id = auth()->id();
        $password['password'] = Hash::make($password['password']);
        return $this->userContext->update($password, $user_id);
    }
    public function updateProfile(array $data)
    {
        $user_id = auth()->id();
        return $this->userContext->update($data, $user_id);
    }

    public function CreateUser(array $data, $role)
    {
        $data['password'] = Hash::make($data['password']);
        $data += ["role" => $role];
        $user = $this->userContext->create($data);
        $this->userContext->save();
        return $user;
    }


    public function createRole(array $data)
    {
        $role = new Roles($data);

        $role->title = 'admin';
        $role->update($role->getAttributes(), $data);
        $this->userContext->saveModel($role);
        return $role;
    }

    public function getRoleByUser()
    {
        $role = new Roles(['id' => 1, 'title' => 'role name']);
        return $role->users();
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