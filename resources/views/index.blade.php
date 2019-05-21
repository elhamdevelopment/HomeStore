@extends('layouts.app')

@section('content')
    <div class="iziToast-wrapper iziToast-wrapper-topRight"></div>
    {{--serach header--}}
    <div id="searchHeader" class="container-fluid no-gutters px-0 py-2">
        <div class="d-flex flex-column justify-content-center">
            <div class="col-12 text-center text-dark pt-3">
                <img src="/img/easy-food-logo.png" alt="" width="240">
                <h2 class="mt-2">سفارش آنلاین غذا از بهترین رستوران‌ها و فست‌فودها</h2>
                <h5 class="mt-2 pt-2 pb-2 text-secondary">شهر و محله خود را انتخاب کنید :</h5>
            </div>
            <div class="col-12 col-md-10 col-lg-8 col-xl-6 m-auto">
                <form class="d-none d-md-block" id="searchFrm">
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
                        <input type="text" id="locationName" class="form-control" placeholder="نام محله"
                               style="margin-left: -2px">
                        <input name="restaurantName" id="restaurantName" type="text" class="form-control"
                               placeholder="نام رستوران">
                        <div class="input-group-append d-block">
                            <button id="searchBtn" type="button" class="btn btn-success" href="/restaurant-list"><i
                                        class="fa fa-search ml-1"></i> نمایش
                                رستوران ها
                            </button>
                        </div>
                    </div>
                </form>
                <form action="" class="d-block d-md-none">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <select class="input-group-text custom-select" id="inputGroupSelect01">
                                <option selected>تهران</option>
                                <option value="1">شیراز</option>
                                <option value="2">تبریز</option>
                                <option value="3">مشهد</option>
                                <option value="3">اصفهان</option>
                            </select>
                        </div>
                        <input type="text" name="locationName" class="form-control" id="" placeholder="نام محله">
                    </div>
                    <div class="form-group">
                        <input type="text" name="locationName" class="form-control" id="" placeholder="نام محله">
                    </div>
                    <div class="form-group">
                        <input name="restaurantName" id="" type="text" class="form-control"
                               placeholder="نام رستوران">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-success btn-block"><i class="fa fa-search ml-1"></i> نمایش
                            رستوران ها
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 m-auto">
                <span class="behinde-line">یا</span>
            </div>
            <div class="col-auto d-flex justify-content-center">
                <div class="col-auto">
                    <button type="button" class="btn btn-light"><i
                                class="fa fa-map-marker ml-1"></i>رستوران های اطراف من
                    </button>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-light"><i class="fa fa-address-book ml-1"></i>رستوران های
                        آدرس من
                    </button>
                </div>

            </div>
        </div>
    </div>
    {{-- special restaurants--}}
    <div class="container">
        <div class="row justify-content-center mt-5" id="restaurantDiscountContainer">
            <div class="col-12 text-primary text-center mb-2">
                <h4 class="text-gray-200 text-center">رستوران های تخفیف دار</h4></div>
            <div class="col-12">
                <div class="carousel"
                     data-flickity='{"autoPlay":true,"prevNextButtons": false ,"groupCells":true, "freeScroll": true, "contain": true }'>

                        <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                            <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <span class="off-tag">10%</span>
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h6 class="card-title">جیوانی</h6>
                                    <span class="card-text small">شیراز معای آباد</span>
                                </div>
                            </div>
                            </a>
                        </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <span class="off-tag">10%</span>
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h6 class="card-title">جیوانی</h6>
                                    <span class="card-text small">شیراز معای آباد</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <span class="off-tag">10%</span>
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h6 class="card-title">جیوانی</h6>
                                    <span class="card-text small">شیراز معای آباد</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <span class="off-tag">10%</span>
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h6 class="card-title">جیوانی</h6>
                                    <span class="card-text small">شیراز معای آباد</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <span class="off-tag">10%</span>
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h6 class="card-title">جیوانی</h6>
                                    <span class="card-text small">شیراز معای آباد</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <span class="off-tag">10%</span>
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h6 class="card-title">جیوانی</h6>
                                    <span class="card-text small">شیراز معای آباد</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <span class="off-tag">10%</span>
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h6 class="card-title">جیوانی</h6>
                                    <span class="card-text small">شیراز معای آباد</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <span class="off-tag">10%</span>
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <div class="mt-3">
                                    <h6 class="card-title">جیوانی</h6>
                                    <span class="card-text small">شیراز معای آباد</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5 pt-2" id="restaurantChoiceContainer">
            <div class="col-12 text-primary text-center mb-2">
                <h4 class="text-primary text-center">رستورانهای منتخب</h4></div>
            <div class="col-12">
                <div class="carousel"
                     data-flickity='{"autoPlay":true,"prevNextButtons": false ,"groupCells":true, "freeScroll": true, "contain": true }'>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <h6 class="card-title mt-3">نام رستوران</h6>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <h6 class="card-title mt-3">نام رستوران</h6>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <h6 class="card-title mt-3">نام رستوران</h6>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <h6 class="card-title mt-3">نام رستوران</h6>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <h6 class="card-title mt-3">نام رستوران</h6>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <h6 class="card-title mt-3">نام رستوران</h6>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <h6 class="card-title mt-3">نام رستوران</h6>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <h6 class="card-title mt-3">نام رستوران</h6>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <h6 class="card-title mt-3">نام رستوران</h6>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="text-center m-auto">
                                <div class="card-discount m-auto">
                                    <img class="" src="img/shoplogo.jpg" alt="">
                                </div>
                                <h6 class="card-title mt-3">نام رستوران</h6>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{--baner--}}
    <div class="container-fluid no-gutters mt-5">
        <div class="row">
            <div class="col-12 px-0">
                <div class="baner"></div>
            </div>
        </div>
    </div>
    {{--vip res--}}
    <div class="container mb-5">
        <div class="row justify-content-center mt-5" id="restaurantVipContainer">

            <h4 class="text-primary text-center mb-5">رستوران های ویژه</h4>
            <div class="col-12">
                <div class="carousel"
                     data-flickity='{"autoPlay":true,"groupCells":true,"prevNextButtons": false, "freeScroll": true, "contain": true }'>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                        <div class="card card-shadow bg-white rounded-xl mb-3">
                            <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                            <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                 class="res-logo  center-block">
                            <div class="card-body text-center pt-4">
                                <h5 class="card-text pt-4">نام رستوران</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="card card-shadow bg-white rounded-xl mb-3">
                                <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                                <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                     class="res-logo  center-block">
                                <div class="card-body text-center pt-4">
                                    <h5 class="card-text pt-4">نام رستوران</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="card card-shadow bg-white rounded-xl mb-3">
                                <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                                <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                     class="res-logo  center-block">
                                <div class="card-body text-center pt-4">
                                    <h5 class="card-text pt-4">نام رستوران</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="card card-shadow bg-white rounded-xl mb-3">
                                <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                                <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                     class="res-logo  center-block">
                                <div class="card-body text-center pt-4">
                                    <h5 class="card-text pt-4">نام رستوران</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="card card-shadow bg-white rounded-xl mb-3">
                                <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                                <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                     class="res-logo  center-block">
                                <div class="card-body text-center pt-4">
                                    <h5 class="card-text pt-4">نام رستوران</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="card card-shadow bg-white rounded-xl mb-3">
                                <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                                <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                     class="res-logo  center-block">
                                <div class="card-body text-center pt-4">
                                    <h5 class="card-text pt-4">نام رستوران</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="card card-shadow bg-white rounded-xl mb-3">
                                <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                                <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                     class="res-logo  center-block">
                                <div class="card-body text-center pt-4">
                                    <h5 class="card-text pt-4">نام رستوران</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="card card-shadow bg-white rounded-xl mb-3">
                                <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                                <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                     class="res-logo  center-block">
                                <div class="card-body text-center pt-4">
                                    <h5 class="card-text pt-4">نام رستوران</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="card card-shadow bg-white rounded-xl mb-3">
                                <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                                <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                     class="res-logo  center-block">
                                <div class="card-body text-center pt-4">
                                    <h5 class="card-text pt-4">نام رستوران</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="card card-shadow bg-white rounded-xl mb-3">
                                <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                                <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                     class="res-logo  center-block">
                                <div class="card-body text-center pt-4">
                                    <h5 class="card-text pt-4">نام رستوران</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell col-12 col-sm-5 col-md-3">
                        <a href="/restaurant-detail" class="text-gray">
                            <div class="card card-shadow bg-white rounded-xl mb-3">
                                <img class="card-img-top rounded-xl" src="img/background4.jpg" alt="">
                                <img src="https://media.chilivery.com/img/restaurantProfile/fea51201e61be5e9c5396d7a52a72085/chainRestaurantProfile-باگت-102692.png"
                                     class="res-logo  center-block">
                                <div class="card-body text-center pt-4">
                                    <h5 class="card-text pt-4">نام رستوران</h5>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    {{--mobile send link--}}
    <section class="app-section bg-dark pt-5" style="margin-top: 8rem">
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
                                        <input type="text" class="form-control" id="SearchLocation"
                                               placeholder="912*****">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-success"><i
                                                        class="fas fa-fighter-jet ml-1"></i> ارسال لینک
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
    <section id="guide-box" class="my-5">
        <div class="container">
            <div class="row">
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
    {{--register section--}}
    <section class="register-restaurant">
        <div class="background-div">
            <div class="reg-col left-col-div">
                <div class="reg-inner-image"></div>
            </div>
            <div class="reg-col right-col-div">
                <div class="desc-wrapper">
                    <h3 class="font-weight-bold">با ثبت رستوران خود در
                        <span class="text-danger">ایزی فود</span>، <br>
                        به صورت آنلاین سفارش بگیرید. </h3><a href="/">
                        <button class="btn btn-success btn-raised btn-lg btn-block">همین حالا ثبت کن!</button>
                    </a></div>

                <div class="middle-icon-wrapper"><a href="/">
                        <div class="middle-icon">
                            <p class="mt-3">
                                <i class="fas fa-store-alt text-gray-light font-size-14"></i>
                            </p>
                            <p>ثبت رستوران</p></div>
                    </a></div>
            </div>
        </div>
    </section>
    {{--text section--}}
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div style="line-height: 1.2cm"
                     class="text-center m-auto col-lg-12 col-md-8 col-sm-10 col-xs-12 col-lg-push-2 col-md-push-2 col-sm-push-1 col-xs-push-0">
                    <div class="text-primary"><h2>با ایزی فود از مزه سفارش آنلاین غذا لذت ببرید</h2></div>
                    <p class="text-muted font-weight-bold font-size-13 "> از طریق وب سایت ما می&zwnj;توانید به راحتی از
                        رستوران دلخواهتان در هر مکانی که هستید بصورت آنلاین
                        سفارش غذا بدهید. غذاهای ایرانی، فست فود، صبحانه، ایتالیایی، هندی و ...
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
