@extends('layouts.app-market')

@section('content')
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">کالای اساسی</a></li>
                    <li class="breadcrumb-item active">نوشیدنی</li>
                </ol>
            </div>
        </div>
        <div class="card bg-white card-shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="product-photo carousel mb-4"
                             data-flickity='{"autoPlay":true,"fullscreen": true,"rightToLeft": true ,"groupCells":true,"prevNextButtons": false,"freeScroll": true }'>
                            <div class="col-12 carousel-cell">
                                <img src="/img/product/p1.jpeg" class="" alt="" style="width: 100%; height: 370px">
                            </div>
                            <div class="col-12 carousel-cell">
                                <img src="/img/product/p3.png" class="" alt="" style="width: 100%; height: 370px">
                            </div>
                            <div class="col-12 carousel-cell">
                                <img src="/img/product/p2.jpeg" class="" alt="" style="width: 100%; height: 370px">
                            </div>
                            <div class="col-12 carousel-cell">
                                <img src="/img/product/p4.jpeg" class="" alt="" style="width: 100%; height: 370px">
                            </div>
                        </div>
                    </div>
                    <div class="col-9 product-info">
                        <div class="d-flex flex-row justify-content-between">
                            <h3>آبمیوه هلو یک لیتری سان استار</h3>
                            <div>
                                <i class="material-icons hover  ml-2 pointer" data-toggle="tooltip" title="م">compare_arrows</i>
                                <i class="material-icons hover  ml-2 pointer" data-toggle="tooltip"
                                   title="اشتراک گذاری">share</i>
                                <i class="material-icons hover  ml-2 pointer" data-toggle="tooltip"
                                   title="افزودن به علاقه مندی">favorite</i>
                            </div>
                        </div>
                        <span class="star-rating">
                            <i class="material-icons text-warning" style="width: 80%;"></i>
                        </span>
                        <span class="font-weight-bold font-size-14 text-secondary">4.2</span>
                        <a href="#" class="mr-2">نقد و بررسی (0)</a>
                        <hr>
                        <div>گارانتی اصالت و سلامت فیزیکی کالا</div>
                        <div>48 ساعت ضمانت بازگشت کالا در صورت وجود مشکل</div>
                        <div class="text-secondary font-size-13"><span>قیمت:</span> <span>{{number_format(120000)}} تومان</span>
                        </div>
                        <div class="text-danger font-size-13"><span>تخفیف:</span>
                            <span>{{number_format(1000)}} تومان</span>
                        </div>
                        <div class="text-success font-size-14"><span>قیمت کالا:</span> <span>{{number_format(12000)}} تومان</span>
                        </div>
                        <hr>
                        <div class="d-flex flex-row mb-md-4 order">
                            <label class="mb-0 pl-2 hidden-sm-down d-flex align-self-center">تعداد: </label>
                            <div class="ml-md-3 rounded d-flex btn-white-border btn-raised ltr number-spinner"
                                 style="width: 150px">
                                <input id="quantity" class="text-center ls-1 form-control"
                                       data-plugin-spinner data-digit
                                       data-plugin-options='{"min": 1, "max": 10}'
                                       type="text"
                                       value="1"
                                       name="quantity"
                                       data-bts-min="0"
                                       data-bts-max="100"
                                       data-bts-step="1"
                                       data-bts-decimal="0"
                                       data-bts-step-interval="100"
                                       data-bts-force-step-divisibility="round"
                                       data-bts-step-interval-delay="500"
                                       data-bts-booster="true"
                                       data-bts-boostat="10"
                                       data-bts-max-boosted-step="false"
                                       data-bts-mousewheel="true"
                                       data-bts-button-down-class="btn btn-white"
                                       data-bts-button-up-class="btn btn-white">
                            </div>
                            <button type="button" class="btn btn-primary btn-lg  btn-raised "><i
                                        class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                            </button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <div class="d-flex flex-row pt-4">
                    <ul class="nav nav-tabs" id="productInfoTab" role="tablist">
                        <li class="nav-item text-center">
                            <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="one" aria-selected="true">توضیحات</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" id="property-tab" data-toggle="tab" href="#productProperty" role="tab"
                               aria-controls="Two" aria-selected="false"> مشخصات</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link " id="productComment-tab" data-toggle="tab" href="#productComment" role="tab"
                               aria-controls="Three" aria-selected="false">نقد و بررسی
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 tab-content  px-0 py-2">
                    <div class="tab-pane fade show active text-justify p-3" id="one" role="tabpanel"
                         aria-labelledby="one-tab">
                        <p>برای انجام دادن یک ماساژ عالی برای کودک که در خواب راحت او موثر باشد،
                            روغن کودک «جانسون» (Johonson baby oil) پیشنهاد می‌شود. برای بهتر خوابیدن کودک ماساژ تاثیر
                            زیادی دارد. این روغن باعث می‌شود که جریان خون به خوبی در بدنشان انجام شده و خواب عمیق داشته
                            باشند. روغن بدن کودک جانسون می‌تواند بخشی از روال شبانه مادران باشد که به کودکشان آرامشی
                            لذت‌بخش تقدیم کنند. این روغن حاوی مرطوب کننده طبیعی است که پوست کودک را نرم و لطیف می‌سازد.
                            بوی ملایم و خوب آن، حس آرامش عمیقی به کودک می‌دهد. این روغن کمک می‌کند که پوست کودک، تا 10
                            برابر بیشتر، رطوبت را در خود نگه دارد. روغن کودک جانسون صورتی رنگ بسیار مناسب برای پوست خشک
                            نیز است که آن را به سرعت نرم می‌سازد. یک پیشنهاد خوب برای استفاده‌ی بهتر و نتیجه‌ی بیشتر از
                            این محصول این است که قبل از خواب کودک خود را با آب گرم بشویید و پس از خشک کردن بدن کودک، با
                            ریختن مقداری از این روغن در کف دست خود، تمام بدن کودک را از گردن تا کف پاها، به آرامی ماساژ
                            دهید. پس از آن خواهید دید که خودتان نیز خوابی راحت داشته‌اید</p>
                    </div>
                    <div class="tab-pane fade p-3" id="productProperty" role="tabpanel" aria-labelledby="property-tab">
                        <dl class="row pr-3 ml-0 mb-0 py-3">
                            <dt class="col-md-3 col-xl-2 text-muted">نوع</dt>
                            <dd class="col-md-9 col-xl-10 pl-4 font-weight-normal">روزمره</dd>
                            <dt class="col-md-3 col-xl-2  text-gray-200">جنس رویه</dt>
                            <dd class="col-md-9 col-xl-10 pl-4 font-weight-normal">چرم طبیعی</dd>
                            <dt class="col-md-3 col-xl-2 text-gray-200 fa-en">وزن تقریبی کفش (یک لنگه)</dt>
                            <dd class="col-md-9 col-xl-10 pl-4 font-weight-normal">350 گرم</dd>
                            <dt class="col-md-3 col-xl-2 text-gray-200 fa-en">جنس کف کفش</dt>
                            <dd class="col-md-9 col-xl-10 pl-4 font-weight-normal">لاستیک</dd>
                            <dt class="col-md-3 col-xl-2 text-gray-200">سایر مشخصات و قابلیت ها</dt>
                            <dd class="col-md-9 col-xl-10 pl-4 font-weight-normal">جنس رویه و داخل کفش از مرغوب&zwnj;ترین
                                چرم&zwnj;های طبیعی<br>
                                طراحی منحصر به فرد<br>
                                کفی چرمی آنتی باکتریال<br>
                                جلوگیری از بوی بد پا
                            </dd>
                        </dl>
                    </div>
                    <div class="tab-pane fade p-5" id="productComment" role="tabpanel" aria-labelledby="productComment-tab">
                        <div class="mb-4 comment">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="d-flex flex-row">
                                    <h5 class="font-weight-bold">محمد رضا</h5>
                                    <span class="mr-3 text-muted">
                                  <i class="fas fa-clock text-muted ml-1"></i> <span> ۱۳۹۶/۱۲/۲۶ ۱۳:۴۳:۱۰ </span>
                                </span>

                                </div>

                                <div class="">
                                     <span class="star-rating">
                                          <i class="material-icons text-warning" style="width: 80%;"></i>
                                     </span>
                                    <span class="font-weight-bold font-size-14 text-secondary">4.2</span>
                                </div>
                            </div>
                            <p class=" text-justify py-3">یه هفته هس گوشی به دستم رسیده گوشی از همه لحاظ عالیه دوربین سلفیش که
                                کولاک میکنه وامکانات زیادی داره حسگر اثر انگشتم که کافیه دستت رو روش بزاری بلا فاصله باز
                                میشه در برابر a7 2017 یه سر و گردن بالاتره یه چیز جالب اینه که کم کردن صدا رو که فشار میدی
                                تو1 الی1.5ثانیه عکس فوری میگیره و با مفصل انگشتتون میتونید اسکرین شات فیلم از صفحه وبرنامه
                                های کاربردی رو باز کنید </p>
                        </div>
                        <div class="mb-4 comment">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="d-flex flex-row">
                                    <h5 class="font-weight-bold">محمد رضا</h5>
                                    <span class="mr-3 text-muted">
                                  <i class="fas fa-clock text-muted ml-1"></i> <span> ۱۳۹۶/۱۲/۲۶ ۱۳:۴۳:۱۰ </span>
                                </span>

                                </div>

                                <div class="">
                                     <span class="star-rating">
                                          <i class="material-icons text-warning" style="width: 80%;"></i>
                                     </span>
                                    <span class="font-weight-bold font-size-14 text-secondary">4.2</span>
                                </div>
                            </div>
                            <p class=" text-justify py-3">یه هفته هس گوشی به دستم رسیده گوشی از همه لحاظ عالیه دوربین سلفیش که
                                کولاک میکنه وامکانات زیادی داره حسگر اثر انگشتم که کافیه دستت رو روش بزاری بلا فاصله باز
                                میشه در برابر a7 2017 یه سر و گردن بالاتره یه چیز جالب اینه که کم کردن صدا رو که فشار میدی
                                تو1 الی1.5ثانیه عکس فوری میگیره و با مفصل انگشتتون میتونید اسکرین شات فیلم از صفحه وبرنامه
                                های کاربردی رو باز کنید </p>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="card card-icon mb-4">
                                    <div class="card-body text-center">
                                        {{--<input type="range" class="custom-range" min="1" max="5" step="1"  id="rateSlider">--}}
                                        {{--<div class="slider-example">--}}
                                            {{--<div class="mb-3 slider-default" id="slider-handles">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <h5>امتیاز محصول</h5>
                                        <span class="star-rating">
                            <i class="material-icons text-warning" style="width: 80%;"></i>
                        </span>
                                        <span class="font-weight-bold font-size-14 text-secondary">4.2</span>
                                        <button type="button" class="btn btn-accent btn-block mt-3">شما هم امتیاز دهید</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-9" ng-controller="walletController">
                                <div class="card o-hidden mb-4">
                                    <div class="card-header bg-white">
                                        <i class="fas fa-comment text-muted ml-2"></i>فرم ثبت نظر
                                    </div>
                                    <div class="card-body">
                                        <form action="#" novalidate id="contactForm">
                                            <div class="form-group">
                                                <input type="text" name="" id="" class="form-control" placeholder="موضوع نقد و بررسی">
                                            </div>
                                            <div class="form-group">
                            <textarea class="form-control" placeholder="نظر شما" name="body" id="body"
                                      cols="30" rows="10" required ng-model="body"></textarea>
                                            </div>
                                            <div class="form-group text-left">
                                                <button type="button" class="btn btn-primary" ng-click="addComment()"><i
                                                            class="i-Data-Save ml-1"></i>ثبت نظر
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <h5>کالا های ویژه</h5>
                <hr>
                <div class="carousel"
                     data-flickity='{"autoPlay":true,"rightToLeft": true ,"groupCells":true, "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false }'>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p2.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p3.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p4.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p5.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p6.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p7.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p8.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p9.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p10.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p11.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <h5>کالا های مشابه</h5>
                <hr>
                <div class="carousel"
                     data-flickity='{"autoPlay":true,"rightToLeft": true ,"groupCells":true, "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false }'>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p2.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p8.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p9.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p10.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p11.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p3.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p4.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p5.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p6.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p7.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p8.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p9.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p10.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <div class="card text-center border-0 shadow-sm my-2">
                            <img src="/img/product/p11.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <span class="off-tag">10%</span>
                                <h5>آبمیوه پاکتی انبه استار</h5>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                    <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                </div>
                                <button type="button" class="btn btn-primary btn-raised "><i
                                            class="fas fa-cart-plus ml-2"></i>افزودن به سبد خرید
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
