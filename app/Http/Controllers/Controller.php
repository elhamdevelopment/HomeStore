<?php

namespace HomeStore\Http\Controllers;

use HomeStore\Http\Requests\RoleValidationRequest;
use HomeStore\Models\Roles;

use HomeStore\Services\Auth\RoleService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use HomeStore\Services\Auth\UserService;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//    protected $userService;
//    protected $roleService;
//
//    public function __construct(UserService $userService, RoleService $roleService)
//    {
//        $this->userService = $userService;
//        $this->roleService = $roleService;
//    }
//
//    public function index(Roles $roles)
//    {
//        $users = $this->userService->get();
//        return view('welcome')->with('users', $users);;
//    }
//
//    protected function CreateRole(RoleValidationRequest $request)
//    {
//        $result = $this->roleService->CreateRole($request->all());
//        return JsonResponse('200', 'success', $result);
//    }
//
//
//
//    public function GetRoles()
//    {
//        $result = $this->roleService->GetRoles();
//        return JsonResponse('200', 'success', $result);
//    }
//
//
//    protected function registerUser()
//    {
//        $data = ['title' => 'new'];
//        $model = new Roles($data);
//        $result = $this->userService->create($model);
//        return \Response::json($result);
//    }
}
