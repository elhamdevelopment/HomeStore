<?php

namespace EasyShop\Http\Controllers\Auth;

use EasyShop\Http\Controllers\Controller;
use EasyShop\Http\Requests\RegisterUserRequest;
use EasyShop\Services\Auth\UserService;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AuthController extends Controller
{
    use AuthenticatesUsers;
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('guest')->except('logout','getAuthUser');
    }

    public function register(RegisterUserRequest $request)
    {
        $user = $this->userService->CreateUser($request->all(), 'user');
        $token = auth()->login($user);
        return createJsonResponse('200', 'success', [$user, $token]);
    }

    public function login(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        $remember_me = $request->get('remember') ?: true;
        $field = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';

        $credentials = [$field => $username, 'password' => $password];
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request); //locked
            $this->sendLockoutResponse($request);//throw new exception
        }

        if (!$token = auth()->attempt($credentials, $remember_me)) {
            return createJsonResponse('401', 'ورود نا موفق', ['token' => $token]);

        }
        return createJsonResponse('200', 'success', ['token' => $token, 'redirectPath' =>  $this->redirectTo()]);
    }

    public function logout()
    {
        auth()->logout();
        return createJsonResponse('200','success');
    }

    public function getAuthUser()
    {
        $user = auth()->user();
        return createJsonResponse(200, 'success', $user);
    }

    public function ResetPassword()
    {

    }

    protected function redirectTo()
    {
        $role = auth()->user()->role;
        $redirectPath = '';
        switch ($role) {
            case 'user':
                $redirectPath = '/user/dashboard';
                break;
            case 'restaurant':
                $redirectPath = '/shop/dashboard';
                break;
            case 'admin':
                $redirectPath = '/admin/dashboard';
                break;
            case 'shop':
                $redirectPath = '/shop/dashboard';
                break;
        }
        return $redirectPath;
    }
}
