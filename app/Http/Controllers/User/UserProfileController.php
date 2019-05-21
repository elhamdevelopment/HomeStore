<?php

namespace EasyShop\Http\Controllers\User;

use EasyShop\Http\Requests\UpdateProfileRequest;
use EasyShop\Services\Auth\UserService;
use EasyShop\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    protected $userService;

    public function profile()
    {
        return view('user.user-profile', ['role' => 'user']);
    }

    public function __construct(UserService $userService)
    {
//        $this->middleware('jwt-auth');
        $this->userService = $userService;
    }

    public function getUser()
    {
        $user = auth()->user();
        $user->credit = number_format($user->credit);
        return createJsonResponse(200, 'success', $user);
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $avatar = $request->file('avatar');
//        $extension = $avatar->getClientOriginalExtension();
//        Storage::disk('public')->put($avatar->getFilename() . '.' . $extension, File::get($avatar));
//
//        $type = $avatar->getClientMimeType();
//        $name = $avatar->getClientOriginalName();
//        $filename = $avatar->getFilename() . '.' . $extension;

        $result = $this->userService->updateProfile($request->all());
        return createJsonResponse('200', 'success', $result);
    }


}
