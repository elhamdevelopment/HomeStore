<?php

namespace HomeStore\Http\Controllers;

use HomeStore\Http\Requests\RegisterUserRequest;
use HomeStore\Models\Roles;
use HomeStore\Repository\Repository;
use HomeStore\Services\Auth\UserService;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AuthController extends Controller
{
    use AuthenticatesUsers;
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('guest')->except('logout');
    }

    public function register(RegisterUserRequest $request)
    {
        $user = $this->userService->CreateUser($request->all(), 'user');
        $token = auth()->login($user);
        return createJsonResponse('200', 'success', [$user,$token]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $this->validateLogin($request);
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request); //locked
            $this->sendLockoutResponse($request);//throw new exception
        }

        if (!$token = auth()->attempt($credentials,$request->input('remember'))) {
            return response()->json(['error' => 'Unauthorized', 'token' => $token], 401);
        }
        return createJsonResponse('200', 'success', $token);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function getAuthUser(Request $request)
    {
//        $user = auth()->user();
//        $res = $this->userService->createRole($request->all());
        $res = $this->userService->getRoleByUser();
        return createJsonResponse(200, 'success', $res);
    }

    public function ResetPassword()
    {
        
    }
    protected function redirectTo()
    {
        if (auth()->user()->r) {
            return '/admin/dashboard';
        } else if (auth()->user()->is_authenticated) {
            return '/app';
        } else {
            return '/home';
        }
    }
}
