<?php

namespace HomeStore\Http\Controllers\Auth;

use HomeStore\Http\Requests\RoleValidationRequest;
use Illuminate\Http\Request;
use HomeStore\Http\Requests\UserValidationRequest;
use HomeStore\Models\Users;
use HomeStore\Http\Controllers\Controller;
use HomeStore\Services\Auth\UserService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $userService;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
////            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
////            'password' => ['required', 'string', 'min:8', 'confirmed'],
//        ]);
//    }

//    /**
//     * Create a new user instance after a valid registration.
//     *
//     * @param  array  $data
//     * @return \HomeStore\User
//     */
//    protected function create(array $data)
//    {
//
//        return Users::create([
//            'fistName' => $data['name'],
//            'lastName' => $data['name'],
//            'mobile' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
//    }
//    public function createUser(UserValidationRequest $request)
//    {
//        $user = $this->userService->CreateUser($request->all());
//        $this->guard()->login($user);
//        return createJsonResponse(200, 'success', '');
//    }
    public function register(Request $request)
    {
       //$user = $this->userService->CreateUser($request->all());
//        $this->guard()->login(new Users($request->all()));
        //\Auth::logout();
        return createJsonResponse(200, 'success', $request->all());
    }
}
