{{--============Main Header==========--}}
<div class="main-header">
    <div class="logo text-center">
        {{--<img src="assets/images/logo.png" alt="">--}}
        <i class="i-Shop-3 ml-2 " style="font-size: 24px"></i> پنل مدیریت
    </div>

    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div style="margin: auto"></div>

    <div class="header-part-right">
        <!-- Full screen toggle -->
        <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
        <!-- Grid menu Dropdown -->
        <div class="dropdown">
            <i class="i-Safe-Box text-muted header-icon" id="dropdownMenuButton" data-toggle="dropdown"
               aria-haspopup="true" role="button" aria-expanded="false"></i>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="menu-icon-grid">
                    <a href="#"><i class="nav-icon i-Bar-Chart"></i> داشبورد</a>
                    <a href="#"><i class="i-Shop-2"></i> فروشگاه</a>
                    <a href="#"><i class="i-Find-User"></i> کاربران</a>
                    <a href="#"><i class="i-Shopping-Cart"></i>سفارش</a>
                    <a href="#"><i class="i-Spy"></i> پنل پیک</a>
                    <a href="#"><i class="i-Mail"></i> پیام ها</a>
                </div>
            </div>
        </div>
        <!-- Notificaiton -->
        <div class="dropdown">
            <div class="badge-top-container" id="dropdownNotification" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                <span class="badge badge-primary">3</span>
                <i class="i-Bell text-muted header-icon"></i>
            </div>
            <!-- Notification dropdown -->
            <div class="dropdown-menu dropdown-menu-right notification-dropdown"
                 aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                <div class="dropdown-item d-flex">
                    <div class="notification-icon">
                        <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                    </div>
                    <div class="notification-details flex-grow-1">
                        <p class="m-0 d-flex align-items-center">
                            <span>پیام جدید</span>
                            <span class="badge badge-pill badge-primary ml-1 mr-1">جدید</span>
                            <span class="flex-grow-1"></span>
                            <span class="text-small text-muted ml-auto">10 ثانیه پیش</span>
                        </p>
                        <p class="text-small text-muted m-0">جیمز: هی! آیا مشغول هستید؟</p>
                    </div>
                </div>
                <div class="dropdown-item d-flex">
                    <div class="notification-icon">
                        <i class="i-Receipt-3 text-success mr-1"></i>
                    </div>
                    <div class="notification-details flex-grow-1">
                        <p class="m-0 d-flex align-items-center">
                            <span>سفارش جدید دریافت شد</span>
                            <span class="badge badge-pill badge-success ml-1 mr-1">جدید</span>
                            <span class="flex-grow-1"></span>
                            <span class="text-small text-muted ml-auto">2 ساعت پیش</span>
                        </p>
                        <p class="text-small text-muted m-0">1 هدفون، 3 آی فون ایکس</p>
                    </div>
                </div>
                <div class="dropdown-item d-flex">
                    <div class="notification-icon">
                        <i class="i-Empty-Box text-danger mr-1"></i>
                    </div>
                    <div class="notification-details flex-grow-1">
                        <p class="m-0 d-flex align-items-center">
                            <span>محصول موجود نیست</span>
                            <span class="badge badge-pill badge-danger ml-1 mr-1">3</span>
                            <span class="flex-grow-1"></span>
                            <span class="text-small text-muted ml-auto">10 ساعت پیش</span>
                        </p>
                        <p class="text-small text-muted m-0">هدفون E67، R98، XL90، Q77</p>
                    </div>
                </div>
                <div class="dropdown-item d-flex">
                    <div class="notification-icon">
                        <i class="i-Data-Power text-success mr-1"></i>
                    </div>
                    <div class="notification-details flex-grow-1">
                        <p class="m-0 d-flex align-items-center">
                            <span>سرور بالا!</span>
                            <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                            <span class="flex-grow-1"></span>
                            <span class="text-small text-muted ml-auto">14 ساعت پیش</span>
                        </p>
                        <p class="text-small text-muted m-0">سرور با موفقیت راه اندازی مجدد شد</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- User avatar dropdown -->
        <div class="dropdown">
            <div class="user col align-self-end">
                <img src="/img/avatar-face.png" id="userDropdown" alt="" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        <i class="i-Lock-User mr-1"></i> ارش خادملو
                    </div>
                    <a class="dropdown-item" href="{{url('user/profile')}}">ویرایش پروفایل</a>
                    <a class="dropdown-item" href="{{url('/user/setting')}}">تنظیمات حساب</a>
                    <a class="dropdown-item" href="{{url('user/change-password')}}">تغییر رمز عبور</a>
                    <a class="dropdown-item" href="{{url('/')}}">خروج</a>
                </div>
            </div>
        </div>
    </div>

</div>