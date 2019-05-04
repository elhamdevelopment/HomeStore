<?php

namespace HomeStore\Http\Controllers\Auth;

use HomeStore\Http\Controllers\Controller;
use HomeStore\Services\Auth\UserService;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function showChangePassword()
    {
        return view('auth.change-password', ['role' => 'user']);

    }

    public function changePassword(Request $request)
    {
        if (auth()->check()) {
            $newPassword = $request->input('newPassword');
            $currentPassword = $request->input('currentPassword');
            $password = auth()->User()->password;
            if (Hash::check($currentPassword, $password)) {
                $this->userService->changePassword(['password'=>$newPassword]);
                return createJsonResponse(200, 'success');
            } else {
                return createJsonResponse(400, 'رمز عبور فعلی درست نمی باشد.');
            }

        } else {
            return redirect()->to('/');
        }
    }
}
