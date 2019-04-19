<?php

namespace HomeStore\Http\Controllers\User;

use HomeStore\Http\Requests\RegisterUserRequest;
use HomeStore\Http\Requests\UpdateProfileRequest;
use HomeStore\Models\Users;
use HomeStore\Services\Auth\UserService;
use Illuminate\Http\Request;
use HomeStore\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserProfileController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('jwt.auh');

    }

    public function getUser()
    {
        $user = auth()->user();
        return createJsonResponse(200, 'success', $user);
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $result = $this->userService->updateProfile($request->all());
        return createJsonResponse('200', 'success', $result);
    }

}
