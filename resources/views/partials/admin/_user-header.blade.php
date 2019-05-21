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
                    <a href="{{ url('dash') }}"><i class="i-Home-4"></i> خانه</a>
                    <a href="{{url('/user/address')}}"><i class="i-Address-Book"></i> آدرس من</a>
                    <a href="{{url('/user/wallet')}}"><i class="i-Wallet-21"></i>کیف پول من</a>
                    <a href="{{url('/user/order')}}"><i class="i-Checkout"></i>سفارشات من</a>
                    <a href="{{'/user/favorite'}}"><i class="i-Tag-3"></i>نشان شده</a>
                    <a href="{{url('/user/support')}}"><i class="i-Support"></i> پشتیبانی</a>
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
                        <i class="i-Lock-User mr-1"></i> رضا یزدانی
                    </div>
                    <a class="dropdown-item" href="{{url('user/profile')}}">ویرایش پروفایل</a>
                    <a class="dropdown-item" href="{{url('/user/setting')}}">تنظیمات حساب</a>
                    <a class="dropdown-item" href="{{url('user/change-password')}}">تغییر رمز عبور</a>
                    <a class="dropdown-item" ng-controller="profileController" ng-click="logout()" href="#">خروج</a>
                </div>
            </div>
        </div>
    </div>
</div>