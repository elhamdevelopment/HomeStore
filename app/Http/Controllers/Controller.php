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
}
