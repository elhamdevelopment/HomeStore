@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="firstName"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}"
                                           name="firstName" value="{{ old('firstName') }}" required autofocus>

                                    @if ($errors->has('firstName'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Family') }}</label>

                                <div class="col-md-6">
                                    <input id="lastName" type="text"
                                           class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                           name="lastName" value="{{ old('lastName') }}" required autofocus>

                                    @if ($errors->has('lastName'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}"
                                           name="mobile" value="{{ old('mobile') }}" required autofocus>

                                    @if ($errors->has('mobile'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="register" ng-controller="accountController">

            <div class="panel panel-default" ng-controller="accountController">
                <div class="panel-heading">
                    <h3 class="panel-title">ثبت نام</h3>
                </div>
                <div class="panel-body">
                    <toaster-container
                            toaster-options="{'time-out': 5000,'position-class': 'toast-top-right','close-button': true,'progressbar': true}"></toaster-container>
                    <form name="registerFrm" role="form" novalidate>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="name-addon"><i
                                                    class="fa fa-user"></i></span>
                                        <input ng-model="user.FirstName" type="text" class="form-control"
                                               placeholder="نام" aria-describedby="name-addon" name="name"
                                               ng-required="true" required>
                                    </div>
                                    <span class="error"
                                          ng-show="registerFrm.name.$error.required && registerFrm.name.$touched">لطفا نام را وارد نمایید.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="lastName-addon"><i
                                                    class="fa fa-user-circle-o"></i></span>
                                        <input type="text" ng-model="user.LastName" name="lastname" required
                                               class="form-control" placeholder="نام خانوادگی"
                                               aria-describedby="lastName-addon">
                                    </div>
                                    <span class="error"
                                          ng-show="registerFrm.lastname.$error.required && registerFrm.lastname.$touched">لطفا نام خانوادگی را وارد نمایید.</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="email-addon"><i class="fa fa-envelope"></i></span>
                                <input ng-model="user.Email" type="email" class="form-control" placeholder="ایمیل"
                                       name="email" required>
                            </div>
                            <div ng-messages="registerFrm.email.$error" ng-if="registerFrm.email.$touched"
                                 class="error">
                                <span ng-message="required">لطفا ایمیل را وارد نمایید</span>
                                <span ng-message="email">آدرس ایمیل وارد شده معتبر نمی باشد.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="mobile-addon"><i class="fa fa-mobile"></i></span>
                                <input ng-model="user.PhoneNumber" type="text" ng-pattern="/^09[0-9]{9}$/"
                                       placeholder="مثال : 09123456789" ng-maxlength="11" name="mobile"
                                       class="form-control" placeholder="موبایل" aria-describedby="mobile-addon"
                                       required>
                            </div>
                            <div ng-messages="registerFrm.mobile.$error" ng-if="registerFrm.mobile.$touched"
                                 class="error" role="alert">
                                <span ng-message="required">لطفا موبایل را وارد نمایید</span>
                                <span ng-message="pattern">موبایل وارد شده معتبر نمی باشد</span>
                                <span ng-message="maxlength">موبایل وارد شده معتبر نمی باشد</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="password-addon"><i class="fa fa-key"></i></span>
                                <input ng-model="user.Password" type="password" name="password" class="form-control"
                                       placeholder="کلمه عبور" aria-describedby="password-addon" required>
                            </div>
                            <div ng-messages="registerFrm.password.$error" ng-if="registerFrm.password.$touched"
                                 class="error">
                                <div ng-message="required">لطفا کلمه عبور را وارد نمایید</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="confirmPassword-addon"><i
                                            class="fa fa-key"></i></span>
                                <input match-password="password" ng-model="user.ConfirmPassword" name="confirmPassword"
                                       type="password" class="form-control" required placeholder="تایید کلمه عبور"
                                       aria-describedby="confirmPassword-addon">
                            </div>
                            <div class="clearfix">
                                <div ng-messages="registerFrm.confirmPassword.$error"
                                     ng-if="registerFrm.confirmPassword.$touched  || profileForm.confirmPassword.$dirty"
                                     class="error">
                                    <span ng-message="required">لطفا کلمه عبور را وارد نمایید</span>
                                    <span ng-message="passwordMatch">پسورد یکسان نمی باشد</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button aria-hidden="true" ng-disabled="!registerFrm.$valid" ng-click="register(user)"
                                        type="button" class="btn btn-primary pull-left">ثبت نام<i class="fa fa-save"
                                                                                                  style="padding-right:10px"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
