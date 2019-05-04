@php
    $template = getTemplate($role);
@endphp
@extends($template)
@section('content')
    <div ng-controller="profileController" ng-init="getUserProfile()">
        <form action="#" id="userProfileForm" role="form" novalidate>
            {{--breadcrumb--}}
            <div class="breadcrumb d-flex flex-row justify-content-between">
                <h1>داشبورد</h1>
                <button type="submit" class="btn btn-accent btn-raised" ng-click="updateProfile(user)"><i
                            class="fas fa-save ml-1 bt-1">save</i>ثبت تغییرات
                </button>
            </div>
            <div class="separator-breadcrumb border-top"></div>
            {{-- profile form--}}
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card card-profile-1 mb-4">
                        <div class="card-body text-center">
                            <form action="post" action="{{url('/user/update-profile')}}"  enctype="multipart/form-data">
                                <div class="avatar box-shadow-2 mb-3">
                                    <img src="/img/avatar-96.png" alt="" ng-model="user.avatar">
                                    <input type="file" class="" name="avatar" id="AvatarFile" aria-describedby="" ng-model="user.avatar">
                                </div>
                            </form>

                            <h5 class="py-2" ng-mo><span ng-model="user.first_name"></span> <span
                                        ng-model="user.last_name"></span></h5>

                            @if ($role=="user")
                                <div class="font-size-11 d-flex mt-3 col-10 m-auto py-2">
                                    <i class=" i-Credit-Card text-muted icon-ize-24 pl-2"></i>
                                    <span class="ml-auto">موجودی کیف پول</span>
                                    <h4 class="text-success text-left" ng-model="user.credit"> @{{user.credit}}
                                        تومان</h4>
                                </div>
                            @endif
                            <span class="text-muted font-size-10 pl-2">آخرین زمان ورود</span>
                            <span class="text-muted font-size-11" ng-model="user.last_login_date">@{{ user.created_at }} </span>
                            <form action="">
                                {{--<input type="file" class="form-control">--}}

                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="card o-hidden mb-4">
                        <div class="card-header">
                            <i class="i-Add-User text-muted"></i> اطلاعات کاربری
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <input type="text" required name="fist_name" id="firstName" ng-model="user.first_name"
                                       class="form-control" placeholder="نام">
                            </div>
                            <div class="form-group">
                                <input type="text" required name="last_name" ng-model="user.last_name" id=""
                                       class="form-control" placeholder="نام خانوادگی">
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <label class="radio radio-primary d-flex">
                                    <input type="radio" name="gender" ng-model="user.gender"
                                           ng-checked="(user.gender == 0)">
                                    <span>مرد</span>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio radio-primary mr-2">
                                    <input type="radio" name="gender" ng-model="user.gender"
                                           ng-checked="(user.gender == 1)">
                                    <span>زن</span>
                                    <span class="checkmark"></span>
                                </label>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card  mb-4">
                        <div class="card-header">
                            <i class="i-Email text-muted"></i> اطلاعات تماس
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <input type="email" required dir="ltr" name="email" ng-model="user.email" id=""
                                       class="form-control" placeholder="آدرس ایمیل"
                                       aria-describedby="helpId">
                                <small id="helpId" class="text-success">آدرس ایمیل تایید شده</small>
                            </div>
                            <div class="form-group">
                                <input type="text" required maxlength="11" minlength="11" dir="ltr" name="mobile"
                                       ng-model="user.mobile" id="" class="form-control " placeholder="موبایل"
                                       aria-describedby="helpId">
                                <small id="helpId" class="text-danger">شماره موبایل خود را تایید نمایید.</small>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
