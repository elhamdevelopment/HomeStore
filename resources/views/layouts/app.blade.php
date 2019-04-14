<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>رستوران</title>
    <!-- Styles -->
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">
</head>
<body dir="rtl">
<div class="container">
    <!-- Login Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-user-secret fa-2x ml-2"></i>ورود</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="">
                        <div class="form-group">
                            <input type="email" name="userName" id="userName" class="form-control"
                                   placeholder="آدرس ایمیل یا موبایل"
                                   required>
                            {{--<small id="helpId" class="text-muted">Help text</small>--}}
                        </div>
                        <div class="form-group">
                            <input type="password" name="" id="" class="form-control" placeholder="رمز عبور" required
                                   aria-describedby="helpId">
                            {{--<small id="helpId" class="text-muted">Help text</small>--}}
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="loginRememberMe" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">مرا به خاطر بسپار</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block"><i class="fa fa-sign-in ml-1"></i>ورود
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="w-100">شما می توانید از طریق حساب گوگل خود وارد شوید.</div>
                    <button type="button" class="btn btn-outline-danger" style="width: 50%"><i
                                class="fa fa-google ml-1"></i>ورود با اکانت گوگل
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Register Modal--}}
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ثبت نام</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="آدرس ایمیل"
                                   aria-describedby="helpId">
                            {{--<small id="helpId" class="text-muted">Help text</small>--}}
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="نام"
                                   aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="نام خانوادگی"
                                   aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="موبایل"
                                   aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="password" name="" id="" class="form-control" placeholder="رمز عبور"
                                   aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="password" name="" id="" class="form-control" placeholder="تکرار رمز عبور"
                                   aria-describedby="helpId">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">ثبت نام</button>
                </div>
            </div>
        </div>
    </div>
    {{--header--}}
    <header class="container mt-1 py-2">
        <div class="row justify-content-between">
            <div class="">
                <button type="button" class="btn btn-primary">رستوران <i class="fa fa-shopping-cart ml-1"></i></button>
                <button type="button" class="btn btn-secondary">سوپر مارکت <i class="fa fa-product-hunt ml-1"></i>
                </button>
            </div>
            <div class="row">
                <div class="col-auto  pr-0 mr-0">

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelId">ورود <i
                                class="fa fa-user ml-1"></i></button>
                    <button type="button" class="btn btn-secondary" data-target="#registerModal" data-toggle="modal">ثبت
                        نام <i class="fa fa-registered ml-1"></i>
                    </button>
                </div>
                {{--<div class="col-auto pt-2 ml-0 pl-0">--}}
                    {{--<i class="fa fa-shopping-basket fa-2x text-primary"></i>--}}

                {{--</div>--}}
            </div>
        </div>
    </header>
</div>

<main class="py-4">
    @yield('content')
</main>

{{--fotter--}}
<footer class="bg-dark mx-0 px-0" style="height: 200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto d-flex align-items-end" style="height: 200px">
                <label style="color: #ffffff">کلیه حقوق وب سایت محفوظ است</label>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="{{asset('js/web.js')}}"></script>
</html>
