<?php
/**
 * Created by PhpStorm.
 * User: reza
 * Date: 3/12/2019
 * Time: 10:42 PM
 */

namespace HomeStore\Services\Auth;

use HomeStore\Models\Roles;
use HomeStore\Repository\Repository;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;

class RoleService
{
    protected $roles;

    public function __construct(Roles $roles)
    {
        $this->roles = new Repository($roles);
    }

    public function CreateRole(array $data)
    {
        try {
            $this->roles->create($data);
            $isDone = $this->roles->save();
            return $isDone;
        } catch (Exception $ex) {
            Log::error($ex);
            throw new Exception($ex->getMessage(), 505);
        }

    }

    public function GetRoles()
    {
        try {
            return $this->roles->all();
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage(), 505);
        }
    }

    public function UpdateRole(array $data)
    {
        $this->roles->update($data,$data->id);
        $isDone = $this->roles->save();
    }

    public function DeleteRole(array $id)
    {
        $this->roles->delete($id);
    }
}