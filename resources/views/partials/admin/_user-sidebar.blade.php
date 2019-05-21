{{--============Side Bar==========--}}
<div class="side-content-wrap">
    <div class="sidebar-left open" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item active" data-item="account">
                <a class="nav-item-hold" href="{{url('user/profile')}}">
                    <i class="nav-icon i-Male"></i>
                    <span class="nav-text">حساب کاربری</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="wallet">
                <a class="nav-item-hold" href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Wallet-21"></i>
                    <span class="nav-text">کیف پول من</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{url('user/order')}}">
                    <i class="nav-icon i-Checkout"></i>
                    <span class="nav-text">سفارشات من</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <a class="nav-item-hold" href="{{url('user/favorite')}}">
                    <i class="nav-icon i-Tag-3"></i>
                    <span class="nav-text">مورد علاقه من</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{url('user/address')}}">
                    <i class="nav-icon i-Address-Book"></i>
                    <span class="nav-text">آدرس من</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{url('user/support')}}">
                    <i class="nav-icon i-Support"></i>
                    <span class="nav-text">پشتیبانی</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" ng-controller="profileController" ng-click="logout()" href="#">
                    <i class="nav-icon i-Power-2"></i>
                    <span class="nav-text" >خروج </span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>

    <div class="sidebar-left-secondary" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->
        <ul class="childNav" data-parent="account">
            <li class="nav-item">
                <a href="{{url('user/profile')}}">
                    <i class="nav-icon i-Male"></i>
                    <span class="item-name">پروفایل کاربری</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/change-password')}}">
                    <i class="nav-icon i-Finger-Print"></i>
                    <span class="item-name">تغییر رمز عبور</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="wallet">
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Money-2"></i>
                    <span class="item-name">افزایش اعتبار</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Receipt-3"></i>
                    <span class="item-name">لیست تراکنش ها</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>