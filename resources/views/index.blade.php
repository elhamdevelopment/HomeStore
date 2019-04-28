@extends('layouts.app')

@section('content')
    <div class="iziToast-wrapper iziToast-wrapper-topRight"></div>
    {{--serach header--}}
    <div id="searchHeader" class="container-fluid no-gutters px-0">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center text-dark">
                <img src="/img/logo.png" alt="">
                <h2 class="mt-2">سفارش آنلاین غذا از بهترین رستوران‌ها و فست‌فودها</h2>
                <div class="mt-4 pt-3">شهر و محله خود را انتخاب کنید :</div>
            </div>
            <div class="col-7">
                <form class="" id="searchFrm">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" id="">
                                <select class="city-select" name="city" id="city">
                                    <option>تهران</option>
                                    <option>شیراز</option>
                                    <option>مشهد</option>
                                    <option>اصفهان</option>
                                </select>
                            </div>
                        </div>
                        <input type="text" id="locationName" class="form-control" placeholder="نام محله">
                        <input name="restaurantName" id="restaurantName" type="text" class="form-control"
                               placeholder="نام رستوران">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-success"><i class="fa fa-search ml-1"></i> نمایش رستوران ها
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
                <span class="behinde-line">یا</span>
            </div>
            <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 d-flex justify-content-center">
                <div class="col-auto">
                    <button type="button" class="btn btn-light"><i
                                class="fa fa-map-marker ml-1"></i>رسوران های اطراف من
                    </button>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-light"><i class="fa fa-address-book ml-1"></i>رسوران های
                        اطراف من
                    </button>
                </div>

            </div>
        </div>
    </div>
    {{--res top--}}
    <div class="container">
        <div class="row justify-content-center mt-5" id="restaurantDiscountContainer">
            <div class="col-12 text-primary text-center mb-2">رستوران های تخیف دار</div>
            <div class="col-10">
                <div class="carousel"
                     data-flickity='{"autoPlay":true,"prevNextButtons": false ,"groupCells":true, "freeScroll": true, "contain": true }'>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>

                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5" id="restaurantChoiceContainer">
            <div class="col-12 text-primary text-center mb-2">رستوران های منتخب</div>
            <div class="col-10">
                <div class="carousel"
                     data-flickity='{"autoPlay":true,"prevNextButtons": false ,"groupCells":true, "freeScroll": true, "contain": true }'>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                        </div>
                    </div>

                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card-discount">
                            <span class="off-tag">10%</span>
                            <img class="img-thumbnail" src="img/shoplogo.jpg" alt="">
                            <h6 class="card-title">نام رستوران</h6>
                            <span class="card-text small">شیراز معای آباد</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--baner--}}
    <div class="container-fluid no-gutters px-0 mt-5">
        <div class="row">
            <div class="col no-gutters ">
                <div class="baner"></div>
            </div>
        </div>
    </div>
    {{--vip res--}}
    <div class="container">
        <div class="row justify-content-center mt-5" id="restaurantVipContainer">
            <div class="col-12">
                <h4 class="text-primary text-center">رستوران های ویژه</h4>
            </div>
            <div class="col-10">
                <div class="carousel"
                     data-flickity='{"autoPlay":true,"groupCells":true, "freeScroll": true, "contain": true }'>
                    <div class="carousel-cell col-2">
                        <div class="card">
                            <img class="card-img-top" src="img/background4.jpg" alt="">
                            <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                 class="res-logo  center-block">
                            <div class="card-body">
                                <span class="card-text">نام رستوران</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card">
                            <img class="card-img-top" src="img/background4.jpg" alt="">
                            <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                 class="res-logo  center-block">
                            <div class="card-body">
                                <span class="card-text">نام رستوران</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card">
                            <img class="card-img-top" src="img/background4.jpg" alt="">
                            <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                 class="res-logo  center-block">
                            <div class="card-body">
                                <span class="card-text">نام رستوران</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card">
                            <img class="card-img-top" src="img/background4.jpg" alt="">
                            <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                 class="res-logo  center-block">
                            <div class="card-body">
                                <span class="card-text">نام رستوران</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card">
                            <img class="card-img-top" src="img/background4.jpg" alt="">
                            <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                 class="res-logo  center-block">
                            <div class="card-body">
                                <span class="card-text">نام رستوران</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card">
                            <img class="card-img-top" src="img/background4.jpg" alt="">
                            <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                 class="res-logo  center-block">
                            <div class="card-body">
                                <span class="card-text">نام رستوران</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card">
                            <img class="card-img-top" src="img/background4.jpg" alt="">
                            <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                 class="res-logo  center-block">
                            <div class="card-body">
                                <span class="card-text">نام رستوران</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell col-2">
                        <div class="card">
                            <img class="card-img-top" src="img/background4.jpg" alt="">
                            <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                 class="res-logo  center-block">
                            <div class="card-body">
                                <span class="card-text">نام رستوران</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    {{--mobile send link--}}
    <section class="app-section bg-dark pt-5 mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 right-col col-md-6  col-xs-12 pull-right ">
                    <div class="applications">
                        <h2 class="title">دریافت اپلیکیشن موبایل</h2>
                        <label>برای دریافت پیامک لینک دانلود، شماره موبایل خود را ارسال کنید.</label>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <form action="" class="form-inline">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-mobile"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="SearchLocation" placeholder="912*****">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-success"><i class="fas fa-fighter-jet ml-1"></i> ارسال لینک
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{--<div class="row">--}}
                        {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-xs-offset-0">--}}
                        {{--<div class="app-group text-center">--}}
                        {{--<a href="https://chilivery.com/static/iosGuideInstall" class="ios" rel="nofollow" target="_blank"></a>--}}
                        {{--<a href="https://new.sibapp.com/applications/%DA%86%DB%8C%D9%84%DB%8C%D9%88%D8%B1%DB%8C-%D8%B3%D9%81%D8%A7%D8%B1%D8%B4-%D8%A2%D9%86%D9%84%D8%A7%DB%8C%D9%86-%D8%BA%D8%B0%D8%A7" class="sibapp" rel="nofollow" target="_blank"></a>--}}
                        {{--<a href="https://play.google.com/store/apps/details?id=com.chilivery&amp;hl=enu[f" class="android" rel="nofollow" target="_blank"></a>--}}
                        {{--<a href="https://cafebazaar.ir/app/com.chilivery/?clickId=20170604172443245470604305743188A211A102A108&amp;_branch_match_id=399896464724795354&amp;l=fa" class="cafe-bazar" rel="nofollow" target="_blank"></a>--}}

                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-lg-6 left-col col-md-6 col-sm-6 col-sm-12 col-xs-12 pull-left">
                    <div class="vector-section-1">
                        <img src="img/app_2.png" class="vector-img img-responsive center-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--order 3 step--}}
    <section id="guide-box">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2 class="text-center">راهنمای خرید، آسان و سریع ۳
                        مرحله&zwnj;ای</h2></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-12 pull-right">
                    <div class="text-center">
                        <div></div>
                        <img src="img/step1.png" ng-show="!showProgressBarLoading">
                        <p>کجا هستی؟</p>
                        <p>شهر و مکان خودتون رو بما بگید تا لیست رستوران&zwnj;های اطراف شما رو نمایش بدیم.</p></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-12 pull-right">
                    <div class="text-center">
                        <div></div>
                        <img src="img/step2.png" ng-show="!showProgressBarLoading">
                        <p>چی میل داری؟</p>
                        <p>رستوران مورد نظرتون رو انتخاب کنید و با مشاهده منوی رستوران غذاهای مورد نظرتون رو انتخاب
                            کنید.</p></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-12 pull-right">
                    <div class="text-center">
                        <div></div>
                        <img src="img/step3.png" ng-show="!showProgressBarLoading">
                        <p>به راحتی پرداخت کن!</p>
                        <p>شما می&zwnj;تونید با کارت&zwnj;های عضو شتاب یا از طریق موجودی حساب پرداخت خود را انجام
                            دهید.</p></div>
                </div>
            </div>
        </div>
    </section>
    {{--main--}}
@endsection
