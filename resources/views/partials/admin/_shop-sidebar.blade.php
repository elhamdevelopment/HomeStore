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
            <li class="nav-item" data-item="shop">
                <a class="nav-item-hold" href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Wallet-21"></i>
                    <span class="nav-text">مدیریت رستوران</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="order">
                <a class="nav-item-hold" href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Wallet-21"></i>
                    <span class="nav-text">مدیریت سفارشات</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="product">
                <a class="nav-item-hold" href="{{url('user/order')}}">
                    <i class="nav-icon i-Checkout"></i>
                    <span class="nav-text">مدیریت محصولات</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="invoice">
                <a class="nav-item-hold" href="{{url('user/order')}}">
                    <i class="nav-icon i-Checkout"></i>
                    <span class="nav-text">فاکتور و مالی</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{url('user/favourite')}}">
                    <i class="nav-icon i-Tag-3"></i>
                    <span class="nav-text"> نظرات و امتیاز</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{url('user/address')}}">
                    <i class="nav-icon i-Address-Book"></i>
                    <span class="nav-text">پیام ها</span>
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
                <a class="nav-item-hold" href="{{url('/')}}" target="_blank">
                    <i class="nav-icon i-Power-2"></i>
                    <span class="nav-text">خروج</span>
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
        <ul class="childNav" data-parent="shop">
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Money-2"></i>
                    <span class="item-name">ویرایش اطلاعات فروشگاه</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Receipt-3"></i>
                    <span class="item-name">نمایش صفحه فروشگاه</span>
                </a>
            </li>

        </ul>
        <ul class="childNav" data-parent="order">
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Money-2"></i>
                    <span class="item-name">سفارشات امروز</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Receipt-3"></i>
                    <span class="item-name">جستجو سفارش</span>
                </a>
            </li>

        </ul>
        <ul class="childNav" data-parent="product">
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Money-2"></i>
                    <span class="item-name">ثبت غذای جدید</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Receipt-3"></i>
                    <span class="item-name">مدیریت منو</span>
                </a>
            </li>

        </ul>
        <ul class="childNav" data-parent="invoice">
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Money-2"></i>
                    <span class="item-name">چاپ فاکتور</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Receipt-3"></i>
                    <span class="item-name">وضعیت مالی وفروش</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>