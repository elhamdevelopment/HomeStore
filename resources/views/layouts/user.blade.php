<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل کاربری</title>
    <!-- Styles -->
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lite-purple.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/perfect-scrollbar.css') }}" rel="stylesheet">
</head>
<body>
<div class="app-admin-wrap">
    {{--============Main Header==========--}}
    <div class="main-header">
        <div class="logo text-center">
            {{--<img src="assets/images/logo.png" alt="">--}}
            <i class="i-Shop-3 ml-2 " style="font-size: 24px"></i> پنل کاربری
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
                        <a href="#"><i class="i-Shop-4"></i> خانه</a>
                        <a href="#"><i class="i-Library"></i> عناصر</a>
                        <a href="#"><i class="i-Drop"></i> برنامه ها</a>
                        <a href="#"><i class="i-File-Clipboard-File--Text"></i> فرم ها</a>
                        <a href="#"><i class="i-Checked-User"></i> جلسات</a>
                        <a href="#"><i class="i-Ambulance"></i> پشتیبانی</a>
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
                    <img src="assets/images/faces/1.jpg" id="userDropdown" alt="" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-header">
                            <i class="i-Lock-User mr-1"></i> ارش خادملو
                        </div>
                        <a class="dropdown-item">تنظیمات حساب</a>
                        <a class="dropdown-item">تاریخ صورتحساب</a>
                        <a class="dropdown-item" href="signin.html">خروج</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{--============Side Bar==========--}}
    <div class="side-content-wrap">
        <div class="sidebar-left open" data-perfect-scrollbar data-suppress-scroll-x="true">
            <ul class="navigation-left">
                <li class="nav-item active" data-item="dashboard">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Bar-Chart"></i>
                        <span class="nav-text">داشبورد</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="uikits">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Library"></i>
                        <span class="nav-text">عناصر کاربردی</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="extrakits">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Suitcase"></i>
                        <span class="nav-text">عناصر اضافی</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="apps">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Computer-Secure"></i>
                        <span class="nav-text">برنامه ها</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="forms">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-File-Clipboard-File--Text"></i>
                        <span class="nav-text">فرم ها</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-item-hold" href="datatables.html">
                        <i class="nav-icon i-File-Horizontal-Text"></i>
                        <span class="nav-text">جداول داده</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="sessions">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Administrator"></i>
                        <span class="nav-text">جلسات</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="others">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Double-Tap"></i>
                        <span class="nav-text">سایر</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-item-hold" href="http://demos.ui-lib.com/gull-html-doc/" target="_blank">
                        <i class="nav-icon i-Safe-Box1"></i>
                        <span class="nav-text">سند</span>
                    </a>
                    <div class="triangle"></div>
                </li>
            </ul>
        </div>

        <div class="sidebar-left-secondary" data-perfect-scrollbar data-suppress-scroll-x="true">
            <!-- Submenu Dashboards -->
            <ul class="childNav" data-parent="dashboard">
                <li class="nav-item">
                    <a href="dashboard.v1.html" class="open">
                        <i class="nav-icon i-Clock-3"></i>
                        <span class="item-name">نسخه 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard.v2.html">
                        <i class="nav-icon i-Clock-4"></i>
                        <span class="item-name">نسخه 2</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard.v3.html">
                        <i class="nav-icon i-Over-Time"></i>
                        <span class="item-name">نسخه 3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard.v4.html">
                        <i class="nav-icon i-Clock"></i>
                        <span class="item-name">نسخه 4</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="forms">
                <li class="nav-item">
                    <a href="form.basic.html">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">عناصر اولیه</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="form.layouts.html">
                        <i class="nav-icon i-Split-Vertical"></i>
                        <span class="item-name">طرح های فرم</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="form.input.group.html">
                        <i class="nav-icon i-Receipt-4"></i>
                        <span class="item-name">ورودی گروه ها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="form.validation.html">
                        <i class="nav-icon i-Close-Window"></i>
                        <span class="item-name">فرم اعتبار سنجی</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="smart.wizard.html">
                        <i class="nav-icon i-Width-Window"></i>
                        <span class="item-name">جادوگر هوشمند</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tag.input.html">
                        <i class="nav-icon i-Tag-2"></i>
                        <span class="item-name">ورودی برچسب</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="editor.html">
                        <i class="nav-icon i-Pen-2"></i>
                        <span class="item-name">ویرایشگر غنی</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="apps">
                <li class="nav-item">
                    <a href="invoice.html">
                        <i class="nav-icon i-Add-File"></i>
                        <span class="item-name">فاکتور</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="inbox.html">
                        <i class="nav-icon i-Email"></i>
                        <span class="item-name">صندوق ورودی</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="chat.html">
                        <i class="nav-icon i-Speach-Bubble-3"></i>
                        <span class="item-name">چت</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="extrakits">
                <li class="nav-item">
                    <a href="image.cropper.html">
                        <i class="nav-icon i-Crop-2"></i>
                        <span class="item-name">تصویر کراپر</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="loaders.html">
                        <i class="nav-icon i-Loading-3"></i>
                        <span class="item-name">لودرها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="ladda.button.html">
                        <i class="nav-icon i-Loading-2"></i>
                        <span class="item-name">دکمه های لادا</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="toastr.html">
                        <i class="nav-icon i-Bell"></i>
                        <span class="item-name">تستر</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="sweet.alerts.html">
                        <i class="nav-icon i-Approved-Window"></i>
                        <span class="item-name">هشدار های سوییت</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tour.html">
                        <i class="nav-icon i-Plane"></i>
                        <span class="item-name">تور کاربران</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="upload.html">
                        <i class="nav-icon i-Data-Upload"></i>
                        <span class="item-name">آپلود</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="uikits">
                <li class="nav-item">
                    <a href="alerts.html">
                        <i class="nav-icon i-Bell1"></i>
                        <span class="item-name">هشدارها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="accordion.html">
                        <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                        <span class="item-name">آکاردئون</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="badges.html">
                        <i class="nav-icon i-Medal-2"></i>
                        <span class="item-name">نشانه ها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="buttons.html">
                        <i class="nav-icon i-Cursor-Click"></i>
                        <span class="item-name">دکمه ها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="cards.html">
                        <i class="nav-icon i-Line-Chart-2"></i>
                        <span class="item-name">کارت ها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="card.metrics.html">
                        <i class="nav-icon i-ID-Card"></i>
                        <span class="item-name">معیارهای کارت</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="carousel.html">
                        <i class="nav-icon i-Video-Photographer"></i>
                        <span class="item-name">چرخنده ها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="lists.html">
                        <i class="nav-icon i-Belt-3"></i>
                        <span class="item-name">لیست ها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pagination.html">
                        <i class="nav-icon i-Arrow-Next"></i>
                        <span class="item-name">صفحه بندی</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="popover.html">
                        <i class="nav-icon i-Speach-Bubble-2"></i>
                        <span class="item-name">پیش نمایش</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="progressbar.html">
                        <i class="nav-icon i-Loading"></i>
                        <span class="item-name">نوار پیشرفت</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tables.html">
                        <i class="nav-icon i-File-Horizontal-Text"></i>
                        <span class="item-name">جداول</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tabs.html">
                        <i class="nav-icon i-New-Tab"></i>
                        <span class="item-name">برگه ها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tooltip.html">
                        <i class="nav-icon i-Speach-Bubble-8"></i>
                        <span class="item-name">راهنمای ابزار</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="modals.html">
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">ماژول ها</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="nouislider.html">
                        <i class="nav-icon i-Width-Window"></i>
                        <span class="item-name">اسلایدر ها</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="sessions">
                <li class="nav-item">
                    <a href="signin.html">
                        <i class="nav-icon i-Checked-User"></i>
                        <span class="item-name">ورود</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="signup.html">
                        <i class="nav-icon i-Add-User"></i>
                        <span class="item-name">ثبت نام</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="forgot.html">
                        <i class="nav-icon i-Find-User"></i>
                        <span class="item-name">فراموشی</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="others">
                <li class="nav-item">
                    <a href="not.found.html">
                        <i class="nav-icon i-Error-404-Window"></i>
                        <span class="item-name">پیدا نشد</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="user.profile.html">
                        <i class="nav-icon i-Male"></i>
                        <span class="item-name">مشخصات کاربر</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="blank.html">
                        <i class="nav-icon i-File-Horizontal"></i>
                        <span class="item-name">صفحه خالی</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-overlay"></div>
    </div>

    <!-- ============ Body content start ============= -->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <main class="py-2">
            @yield('content')
        </main>

        <!-- Footer Start -->
        <div class="flex-grow-1"></div>
        <div class="app-footer">
            <div class="row">
                <div class="col-md-9">
                    <p><strong>سفارش غذا آنلاین</strong></p>
                    <p>از طریق این سامانه میتوانید سفارش خود را سریعتر انجام دهید
                    </p>
                </div>
            </div>
            <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                <span class="flex-grow-1"></span>
                <div class="d-flex align-items-center">
                    {{--<img class="logo" src="assets/images/logo.png" alt="">--}}
                    <div>
                        <p class="m-0">&copy; 2019</p>
                        <p class="m-0">همه حقوق محفوظ است</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{asset('js/web.js')}}"></script>
<script src="{{asset('assets/js/vendor/perfect-scrollbar.min.js')}} "></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.min.js')}} "></script>
<script src="{{asset('assets/js/es5/script.min.js')}} "></script>

</body>
</html>
