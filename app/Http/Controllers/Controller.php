<?php

namespace EasyShop\Http\Controllers;

use EasyShop\Http\Requests\RoleValidationRequest;
use EasyShop\Models\Roles;

use EasyShop\Services\Auth\RoleService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use EasyShop\Services\Auth\UserService;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
