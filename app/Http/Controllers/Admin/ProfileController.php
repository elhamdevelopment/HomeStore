<?php

namespace HomeStore\Http\Controllers\admin;

use HomeStore\Http\Requests\RegisterUserRequest;
use HomeStore\Http\Requests\UpdateProfileRequest;
use HomeStore\Models\Users;
use HomeStore\Services\Auth\UserService;
use Illuminate\Http\Request;
use HomeStore\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProfileController extends Controller
{
    protected $userService;

    public function profile()
    {
        $role = "admin";
        return view('user.user-profile',['role'=>$role]);
    }

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
//        $this->middleware('jwt.auh');

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

    public function getUserFavorite(Request $request)
    {
        $result = $this->userService->updateProfile($request->all());
        return createJsonResponse('200', 'success', $result);
    }
    public function deleteUserFavorite($id)
    {
        $result = $this->userService->delete($id);
        return createJsonResponse('200', 'success', $result);
    }


}
