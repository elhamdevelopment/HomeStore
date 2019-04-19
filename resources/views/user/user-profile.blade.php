@extends('layouts.user')

@section('content')
    <div class="breadcrumb d-flex flex-row justify-content-between">
        <h1>داشبورد</h1>
        {{--<ul>--}}
        {{--<li><a href="#">داشبورد</a></li>--}}
        {{--<li>نسخه 1</li>--}}
        {{--</ul>--}}
        <button type="button" class="btn btn-accent btn-raised"><i
                    class="fas fa-save ml-1 bt-1">save</i>ثبت تغییرات
        </button>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card card-profile-1 mb-4">
                <div class="card-body text-center">
                    <form action="">

                    <div class="avatar box-shadow-2 mb-3">
                        <img src="assets/images/faces/16.jpg" alt="">
                        <input type="file" class="" id="inputGroupFile01" aria-describedby="">
                    </div>
                    </form>
                    <h5 class="py-2">نام و نام خانودگی</h5>

                    <div class="font-size-11 d-flex mt-3 col-10 m-auto py-2">
                        <i class=" i-Credit-Card text-muted icon-ize-24 pl-2"></i>
                        <span class="ml-auto">موجودی کیف پول</span>
                        <h4 class="text-success text-left">12،0000 تومان</h4>
                    </div>


                    <p class="text-muted font-size-10">آخرین زمان ورود روز دوشنبه 21 آذر 98</p>
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
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="نام"
                                   aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="نام خانوادگی"
                                   aria-describedby="helpId">
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                            <label class="radio radio-primary d-flex ">
                                <input type="radio" name="radio" value="0">
                                <span>مرد</span>
                                <span class="checkmark"></span>
                            </label>

                            <label class="radio radio-primary mr-2">
                                <input type="radio" name="radio" value="0">
                                <span>زن</span>
                                <span class="checkmark"></span>
                            </label>

                        </div>
                                      </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card  mb-4">
                <div class="card-header">
                    <i class="i-Email text-muted"></i> اطلاعات تماس
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="آدرس ایمیل"
                                   aria-describedby="helpId">
                            <small id="helpId" class="text-muted">آدرس ایمیل تایید شده</small>
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control " placeholder="موبایل"
                                   aria-describedby="helpId">
                            <small id="helpId" class="text-muted">شماره موبایل خود را تایید نمایید.</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
