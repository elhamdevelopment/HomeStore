@extends('layouts.app-market')

@section('content')
    <div class="iziToast-wrapper iziToast-wrapper-topRight"></div>

    <div class="container-fluid">
        <div class="row h-auto">
            <div class="col-5 col-lg-3">
                <div class="card card-shadow">
                    <div class="card-header bg-white border-bottom ">
                        <i class="fas fa-award ml-2"></i><span
                                class="h5 text-secondary">پیشنهاد سوپر مارکت آنلاین</span>
                    </div>
                    <div class="card-body h-auto">
                        <div id="specialProduct" class="carousel mb-4" style="min-height: 270px;"
                             data-flickity='{"autoPlay":true,"rightToLeft": true ,"groupCells":true,"prevNextButtons": false,"freeScroll": true }'>
                            <div class="col-12 carousel-cell">
                                <div class="card text-center border-0">
                                    <img src="/img/product/p6.png" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <span class="off-tag">10%</span>
                                        <h5 class="card-title">آبمیوه پاکتی انبه سان استار</h5>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                            <del class="card-text text-danger">{{number_format(120000)}} تومان</del>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 carousel-cell">
                                <div class="card text-center border-0">
                                    <img src="/img/product/p13.png" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <span class="off-tag">10%</span>
                                        <h5 class="card-title">آبمیوه پاکتی انبه سان استار</h5>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                            <del class="card-text text-danger">{{number_format(120000)}} تومان</del>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 carousel-cell">
                                <div class="card text-center border-0">
                                    <img src="/img/product/p12.jpeg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <span class="off-tag">10%</span>
                                        <h5 class="card-title">آبمیوه پاکتی انبه سان استار</h5>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                            <del class="card-text text-danger">{{number_format(120000)}} تومان</del>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 carousel-cell">
                                <div class="card text-center border-0">
                                    <img src="/img/product/p10.jpeg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <span class="off-tag">10%</span>
                                        <h5 class="card-title">آبمیوه پاکتی انبه سان استار</h5>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                            <del class="card-text text-danger">{{number_format(120000)}} تومان</del>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7 col-lg-9 h-100">
                <div id="banerMarket" class="carousel mb-4" style="min-height: 300px;height: 100%"
                     data-flickity='{"autoPlay":true,"rightToLeft": true ,"groupCells":true,"prevNextButtons": true,"pageDots": false,"freeScroll": true }'>
                    <div class="col-12 carousel-cell">
                        <img src="/img/food.jpg" class="" alt="" style="width: 100%; height: 370px">
                    </div>
                    <div class="col-12 carousel-cell">
                        <img src="/img/food.jpg" class="" alt="" style="width: 100%; height: 370px">
                    </div>
                    <div class="col-12 carousel-cell">
                        <img src="/img/food.jpg" class="" alt="" style="width: 100%; height: 370px">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <h5>محصولات ویژه سوپرمارکت</h5>
                <hr>
                <div class="carousel"
                     data-flickity='{"autoPlay":true,"rightToLeft": true ,"groupCells":true, "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false }'>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">
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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">
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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">
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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">
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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">
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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">
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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">

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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">

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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">

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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">
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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">
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
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                        <a href="/market/product" class="text-gray">
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
                        </a>
                    </div>


                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <h5>تخفیفات وِیژه سوپر مارکت</h5>
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
        <div class="row mt-3">
            <div class="col-12">
                <h5>پر فروش ترین ها</h5>
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
        <div class="row">
            <div class="col-12 mt-2">
                <div class="d-flex flex-row justify-content-between pt-4" id="productTabFilter">
                    <h5 class="d-inline align-self-lg-center text-secondary"><i class="fas fa-shopping-cart pl-2"></i>کالاهای
                        اساسی</h5>
                    <ul class="nav nav-tabs" id="filter" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="one-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="One" aria-selected="true"><i class="fas fa-star ml-2"></i>پر فروش ترین ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="Two" aria-selected="false"><i class="fas fa-gift ml-2"></i> بیشترین
                                تخفیفات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="three-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="Three" aria-selected="false"><i class="fas fa-tag ml-2"></i>
                                جدیدترین ها</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 filter-content px-0 py-2">
                    <div class="carousel"
                         data-flickity='{"autoPlay":true,"rightToLeft": true ,"groupCells":true, "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false }'>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p10.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p11.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p12.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p13.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p5.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p7.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p8.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p2.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p1.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p3.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p9.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p4.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p5.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/food.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/food.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <div class="d-flex flex-row justify-content-between pt-4" id="productTabFilter">
                    <h5 class="d-inline align-self-lg-center text-secondary"><i class="fas fa-shopping-cart pl-2"></i>کالاهای
                        اساسی</h5>
                    <ul class="nav nav-tabs" id="filter" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="one-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="One" aria-selected="true"><i class="fas fa-star ml-2"></i>پر فروش ترین ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="Two" aria-selected="false"><i class="fas fa-gift ml-2"></i> بیشترین
                                تخفیفات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="three-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="Three" aria-selected="false"><i class="fas fa-tag ml-2"></i>
                                جدیدترین ها</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 filter-content px-0 py-2">
                    <div class="carousel"
                         data-flickity='{"autoPlay":true,"rightToLeft": true ,"groupCells":true, "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false }'>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p10.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p11.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p12.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p13.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p5.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p7.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p8.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p2.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p1.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p3.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p9.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p4.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p5.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/food.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/food.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <div class="d-flex flex-row justify-content-between pt-4" id="productTabFilter">
                    <h5 class="d-inline align-self-lg-center text-secondary"><i class="fas fa-shopping-cart pl-2"></i>کالاهای
                        اساسی</h5>
                    <ul class="nav nav-tabs" id="filter" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="one-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="One" aria-selected="true"><i class="fas fa-star ml-2"></i>پر فروش ترین ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="Two" aria-selected="false"><i class="fas fa-gift ml-2"></i> بیشترین
                                تخفیفات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="three-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="Three" aria-selected="false"><i class="fas fa-tag ml-2"></i>
                                جدیدترین ها</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 filter-content px-0 py-2">
                    <div class="carousel"
                         data-flickity='{"autoPlay":true,"rightToLeft": true ,"groupCells":true, "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false }'>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p10.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p11.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p12.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p13.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p5.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p7.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p8.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p2.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p1.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p3.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p9.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p4.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p5.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/food.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/food.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <div class="d-flex flex-row justify-content-between pt-4" id="productTabFilter">
                    <h5 class="d-inline align-self-lg-center text-secondary"><i class="fas fa-shopping-cart pl-2"></i>کالاهای
                        اساسی</h5>
                    <ul class="nav nav-tabs" id="filter" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="one-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="One" aria-selected="true"><i class="fas fa-star ml-2"></i>پر فروش ترین ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="Two" aria-selected="false"><i class="fas fa-gift ml-2"></i> بیشترین
                                تخفیفات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="three-tab" data-toggle="tab" href="#one" role="tab"
                               aria-controls="Three" aria-selected="false"><i class="fas fa-tag ml-2"></i>
                                جدیدترین ها</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 filter-content px-0 py-2">
                    <div class="carousel"
                         data-flickity='{"autoPlay":true,"rightToLeft": true ,"groupCells":true, "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false }'>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p10.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p11.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p12.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p13.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p5.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p7.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p8.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p2.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p1.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p3.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p9.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p4.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/product/p5.jpeg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/food.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 px-1 no-gutters carousel-cell">
                            <div class="card text-center border-0">
                                <img src="/img/food.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <span class="off-tag">10%</span>
                                    <h5>آبمیوه پاکتی انبه استار</h5>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-text text-success">{{number_format(120000)}} تومان</h5>
                                        <del class="card-text text-danger">{{number_format(120000)}} تومان</del>
                                    </div>
                                    <button type="button" class="btn btn-raised btn-sm ml-1"><i
                                                class="fas fa-cart-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-raised btn-sm"><i
                                                class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
