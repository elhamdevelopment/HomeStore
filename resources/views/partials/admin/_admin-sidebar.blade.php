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
                    <i class="nav-icon i-Shop-2"></i>
                    <span class="nav-text">مدیریت فروشگاه ها</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="order">
                <a class="nav-item-hold" href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Full-Cart"></i>
                    <span class="nav-text">مدیریت سفارشات</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="product">
                <a class="nav-item-hold" href="{{url('user/order')}}">
                    <i class="nav-icon i-Management"></i>
                    <span class="nav-text">مدیریت محصولات</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="invoice">
                <a class="nav-item-hold" href="{{url('user/order')}}">
                    <i class="nav-icon i-Financial"></i>
                    <span class="nav-text">فاکتور و مالی</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="user">
                <a class="nav-item-hold" href="{{url('user/order')}}">
                    <i class="nav-icon i-MaleFemale"></i>
                    <span class="nav-text">مدیریت کاربران</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="page">
                <a class="nav-item-hold" href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Newspaper"></i>
                    <span class="nav-text">مدیریت صفحات</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item" data-item="message">
                <a class="nav-item-hold" href="{{url('user/address')}}">
                    <i class="nav-icon i-Email"></i>
                    <span class="nav-text">پیام ها</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="delivery">
                <a class="nav-item-hold" href="{{url('user/support')}}">
                    <i class="nav-icon i-Motorcycle"></i>
                    <span class="nav-text">پنل پیک</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{url('user/favourite')}}">
                    <i class="nav-icon i-Speach-Bubbles"></i>
                    <span class="nav-text">مدیریت نظرات</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Gear"></i>
                    <span class="nav-text">تنظیمات</span>
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
                <a href="{{url('admin/profile')}}">
                    <i class="nav-icon i-Male"></i>
                    <span class="item-name">پروفایل کاربری</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/change-password')}}">
                    <i class="nav-icon i-Finger-Print"></i>
                    <span class="item-name">تغییر رمز عبور</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="user">
            <li class="nav-item">
                <a href="{{url('admin/profile')}}">
                    <i class="nav-icon i-Find-User"></i>
                    <span class="item-name">مدیریت کاربران</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/change-password')}}">
                    <i class="nav-icon i-Password-shopping"></i>
                    <span class="item-name">تغییر رمز کاربر</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/increase-credit')}}">
                    <i class="nav-icon i-Money-2"></i>
                    <span class="item-name">افزایش اعتبار کاربر</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/user-favourite-list')}}">
                    <i class="nav-icon i-Love-User"></i>
                    <span class="item-name">مورد علاقه کاربران</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="shop">
            <p class="my-0 pr-4 text-muted"> <small>رستوران</small></p>
            <li class="nav-item">
                <a href="{{url('admin/add-shop')}}">
                    <i class="nav-icon i-Add"></i>
                    <span class="item-name">تعریف رستوران جدید</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/shop-manage')}}">
                    <i class="nav-icon i-Clothing-Store"></i>
                    <span class="item-name">مدیریت رستوران ها</span>
                </a>
            </li>

            <hr class="my-2">
<p class="my-0 pr-4 text-muted"><small>سوپر مارکت</small></p>
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Add"></i>
                    <span class="item-name">تعریف شعبه جدید </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Clothing-Store"></i>
                    <span class="item-name">مدیریت شعب سوپرمارکت</span>
                </a>
            </li>

        </ul>
        <ul class="childNav" data-parent="order">
            <p class="my-0 pr-4 text-muted"> <small>رستوران</small></p>
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Full-Cart"></i>
                    <span class="item-name"> مدیریت سفارشات</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Spell-Check"></i>
                    <span class="item-name">پیگیری سفارش</span>
                </a>
            </li>
            <hr class="my-2">
            <p class="my-0 pr-4 text-muted"> <small>سوپر مارکت</small></p>
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon  i-Full-Cart"></i>
                    <span class="item-name"> مدیریت سفارشات</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Spell-Check"></i>
                    <span class="item-name">پیگیری سفارش</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="product">
            <p class="my-0 pr-4 text-muted"> <small>رستوران</small></p>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Folder-Archive"></i>
                    <span class="item-name">مدیریت منو غذا</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Add"></i>
                    <span class="item-name">ثبت غذای جدید</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="item-name">لیست غذا ها</span>
                </a>
            </li>
            <hr class="my-2">
            <p class="my-0 pr-4 text-muted"> <small>سوپر مارکت</small></p>
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Folder-Archive"></i>
                    <span class="item-name">دسته بندی محصولات</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Add"></i>
                    <span class="item-name">ثبت کالای جدید</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="item-name">لیست محصولات</span>
                </a>
            </li>



        </ul>
        <ul class="childNav" data-parent="invoice">
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-ATM"></i>
                    <span class="item-name">تسویه حساب رستوران</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Bar-Chart-4"></i>
                    <span class="item-name">تراکنش کیف پول</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="delivery">
            <li class="nav-item">
                <a href="{{url('user/wallet')}}">
                    <i class="nav-icon i-Scooter"></i>
                    <span class="item-name">تعریف پیک جدید</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-ID-Card"></i>
                    <span class="item-name">لیست پیک ها</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Billing"></i>
                    <span class="item-name">حساب مالی پیک</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="message">
            <li class="nav-item">
                <a href="{{url('admin/receive-messsage')}}">
                    <i class="nav-icon i-Inbox-Into"></i>
                    <span class="item-name">پیام های دریافتی</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Inbox-Out"></i>
                    <span class="item-name">پیام های ارسالی</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/wallet-trans')}}">
                    <i class="nav-icon i-Mail-Remove-x"></i>
                    <span class="item-name">پام های حذف شده</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>