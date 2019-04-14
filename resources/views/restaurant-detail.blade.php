@extends('layouts.app')

@section('content')
    <div class="container-fluid no-gutters bg-primary mb-2">
        <div class="container py-2">
            <div class="row  mb-4 p-2">
                <div class="col-2 d-flex flex-column align-items-center">
                    <img src="img/shoplogo.jpg" alt="..." class="img-thumbnail" width="100px">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="shop-rate">
                            <span>124</span> <i class="fa fa-user-o"></i>
                            <span class="badge badge-success p-2"><i class="fa fa-star"></i>4.6</span>
                        </div>
                    </div>

                </div>
                <div class="col-6 d-flex flex-column justify-content-start align-items-start">
                    <h4 class="">هوم برگر (سئول)</h4>
                    <div class="pt-2"><i class="fa fa-map-marker fa-2x ml-3"></i> آدرس: خیابان سئول، جنب بن بست شکری،
                        پلاک 48
                    </div>
                    <div class="pt-2"><i class="fa fa-share-alt fa-2x ml-3"></i>اشتراک
                    </div>
                </div>
                <div class="col-4 d-flex flex-column justify-content-between align-items-end">
                    <div>
                        <i class="fa fa-circle-o text-success"></i>
                        <span class="text-dark">در حال پذیرش  سفارش ..</span>
                    </div>
                    <div class="text-center border-primary border p-1 px-3 rounded">
                        <i class="fa fa-motorcycle fa-flip-horizontal fa-2x ml-2"></i>
                        <small>پیک رایگان 30 تا 50 دقیقه</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item"><a href="#">رستوران</a></li>
                        <li class="breadcrumb-item active">رستوران های شیراز</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="container-fluid pr-0 pl-0 no-gutters">
                        <ul class=" nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab"
                                   aria-controls="One" aria-selected="true"><i class="fa fa-file ml-2"></i>منو</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab"
                                   aria-controls="Two" aria-selected="false"><i class="fa fa-star ml-2"></i> امتیاز و
                                    نظر</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab"
                                   aria-controls="Three" aria-selected="false"><i class="fa fa-building ml-2"></i>اطلاعات
                                    رستوران</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-3">

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-9">
                    <div class="container tab-content">
                        <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <div class="row">
                                <div class="col-12  pt-3 mb-3">
                                    <div id="productCategory" class="carousel justify-content-start bg-light "
                                         data-flickity='{"rightToLeft": true, "pageDots": false ,"groupCells":true, "freeScroll": true, "contain": true }'>

                                        <div class="col-2 carousel-cell">
                                            <i class="fas fa-pizza-slice fa-lg text-gray"></i>
                                            <span class="mr-2">پیتزا</span>
                                        </div>
                                        <div class="col-2 active carousel-cell">
                                            <i class="fas fa-hamburger fa-lg"></i>
                                            <span class="mr-2">همبر گر</span>
                                        </div>
                                        <div class="col-2 carousel-cell">
                                            <i class="fas fa-beer fa-lg text-gray"></i>
                                            <span class="mr-2">نوشیدنی</span>
                                        </div>
                                        <div class="col-2 carousel-cell">
                                            <i class="fas fa-fish fa-lg text-gray"></i>
                                            <span class="mr-2">غذای دریایی</span>
                                        </div>
                                        <div class="col-2 carousel-cell">
                                            <i class="fas fa-hotdog fa-lg text-gray"></i>
                                            <span class="mr-2">هات داگ</span>
                                        </div>
                                        <div class="col-2 carousel-cell">
                                            <i class="fas fa-pepper-hot fa-lg text-gray"></i>
                                            <span class="mr-2">پیتزا</span>
                                        </div>
                                        <div class="col-2 carousel-cell">
                                            <i class="fas fa-ice-cream fa-lg text-gray"></i>
                                            <span class="mr-2">بستنی</span>
                                        </div>
                                        <div class="col-2 carousel-cell">
                                            <i class="fas fa-egg fa-lg text-gray"></i>
                                            <span class="mr-2">تخم مرغ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <i class="fas fa-pizza-slice fa-sm ml-2"></i>
                                    <span>پیتزا</span>
                                    <hr>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="card text-right">
                                        <div class="favorite-btn">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                        <img src="img/food.jpg" alt="..." class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">هوم برگر سفارشی</h5>
                                            <small class="card-text">برگر گریل شده 100% گوشت، پنیر گودا، سس آلفردو
                                            </small>

                                            <div class="middle-line">
                                                <span>124</span> <i class="fa fa-user-o"></i>
                                                <span class="badge badge-success p-2"><i
                                                            class="fa fa-star"></i>4.6</span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class=" d-flex flex-row justify-content-between">
                                                <span>120000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="card text-right">
                                        <div class="favorite-btn">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                        <img src="img/food.jpg" alt="..." class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">هوم برگر سفارشی</h5>
                                            <small class="card-text">برگر گریل شده 100% گوشت، پنیر گودا، سس آلفردو
                                            </small>

                                            <div class="middle-line">
                                                <span>124</span> <i class="fa fa-user-o"></i>
                                                <span class="badge badge-success p-2"><i
                                                            class="fa fa-star"></i>4.6</span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class=" d-flex flex-row justify-content-between">
                                                <span>120000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="card text-right">
                                        <div class="favorite-btn">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                        <img src="img/food.jpg" alt="..." class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">هوم برگر سفارشی</h5>
                                            <small class="card-text">برگر گریل شده 100% گوشت، پنیر گودا، سس آلفردو
                                            </small>

                                            <div class="middle-line">
                                                <span>124</span> <i class="fa fa-user-o"></i>
                                                <span class="badge badge-success p-2"><i
                                                            class="fa fa-star"></i>4.6</span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class=" d-flex flex-row justify-content-between">
                                                <span>120000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="card text-right">
                                        <div class="favorite-btn">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                        <img src="img/food.jpg" alt="..." class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">هوم برگر سفارشی</h5>
                                            <small class="card-text">برگر گریل شده 100% گوشت، پنیر گودا، سس آلفردو
                                            </small>

                                            <div class="middle-line">
                                                <span>124</span> <i class="fa fa-user-o"></i>
                                                <span class="badge badge-success p-2"><i
                                                            class="fa fa-star"></i>4.6</span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class=" d-flex flex-row justify-content-between">
                                                <span>120000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="card text-right">
                                        <div class="favorite-btn">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                        <img src="img/food.jpg" alt="..." class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">هوم برگر سفارشی</h5>
                                            <small class="card-text">برگر گریل شده 100% گوشت، پنیر گودا، سس آلفردو
                                            </small>

                                            <div class="middle-line">
                                                <span>124</span> <i class="fa fa-user-o"></i>
                                                <span class="badge badge-success p-2"><i
                                                            class="fa fa-star"></i>4.6</span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class=" d-flex flex-row justify-content-between">
                                                <span>120000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="card text-right">
                                        <div class="favorite-btn">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                        <img src="img/food.jpg" alt="..." class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">هوم برگر سفارشی</h5>
                                            <small class="card-text">برگر گریل شده 100% گوشت، پنیر گودا، سس آلفردو
                                            </small>

                                            <div class="middle-line">
                                                <span>124</span> <i class="fa fa-user-o"></i>
                                                <span class="badge badge-success p-2"><i
                                                            class="fa fa-star"></i>4.6</span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class=" d-flex flex-row justify-content-between">
                                                <span>120000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="card text-right">
                                        <div class="favorite-btn">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                        <img src="img/food.jpg" alt="..." class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">هوم برگر سفارشی</h5>
                                            <small class="card-text">برگر گریل شده 100% گوشت، پنیر گودا، سس آلفردو
                                            </small>

                                            <div class="middle-line">
                                                <span>124</span> <i class="fa fa-user-o"></i>
                                                <span class="badge badge-success p-2"><i
                                                            class="fa fa-star"></i>4.6</span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class=" d-flex flex-row justify-content-between">
                                                <span>120000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="card text-right">
                                        <div class="favorite-btn">
                                            <i class="fas fa-heart fa-lg"></i>
                                        </div>
                                        <img src="img/food.jpg" alt="..." class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">هوم برگر سفارشی</h5>
                                            <small class="card-text">برگر گریل شده 100% گوشت، پنیر گودا، سس آلفردو
                                            </small>

                                            <div class="middle-line">
                                                <span>124</span> <i class="fa fa-user-o"></i>
                                                <span class="badge badge-success p-2"><i
                                                            class="fa fa-star"></i>4.6</span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class=" d-flex flex-row justify-content-between">
                                                <span>120000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                            2
                        </div>
                        <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex flex-row justify-content-between "><span>نوع رستوران</span>
                                            <span>فست فود</span></li>
                                        <li class="list-group-item d-flex flex-row justify-content-between "><span>نوع غذا</span>
                                            <span>خوراک، پیش غذا، نوشیدنی، سالاد، پیتزا، برگر، ساندویچ، سوخاری، مرغ بریان</span>
                                        </li>
                                        <li class="list-group-item d-flex flex-row justify-content-between "><span>نوع رستوران</span>
                                            <span>فست فود</span></li>
                                        <li class="list-group-item d-flex flex-row justify-content-between "><span>حداقل سفارش</span>
                                            <span>10,000 تومان</span></li>
                                        <li class="list-group-item d-flex flex-row justify-content-between "><span>سطح اقتصادی</span>
                                            <span>متوسط</span></li>
                                        <li class="list-group-item d-flex flex-row justify-content-between "><span>مدت زمان تحویل</span>
                                            <span>20 تا 75 دقیقه</span></li>
                                        <li class="list-group-item d-flex flex-row justify-content-between "><span>هزینه ارسال منطقه تحت پوشش</span>
                                            <span>1,000 تا 12,000 تومان</span></li>
                                        <li class="list-group-item d-flex flex-row justify-content-between "><span>مناطق تحت پوشش</span>
                                            <span>آفریقا-همت-حقانی، برزیل-گاندی، ملاصدرا-شیخ بهایی، قبا-میرداماد، دروس-کلاهدوز، اختیاریه</span>
                                        </li>
                                        <li class="list-group-item d-flex flex-row justify-content-between ">
                                            <span>آدرس</span> <span>فست فود</span></li>
                                        <li class="list-group-item d-flex flex-row justify-content-between "><span>ساعات کاری</span>
                                            <span>جمعه11:30 تا 16:0016:00 تا 23:30</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class=" card text-right d-none d-sm-block">
                        <div class="card-header">
                            <i class="fa fa-shopping-basket ml-2"></i>سبد خرید
                        </div>
                        <div class="card-body p-2">
                            <div class="card bg-gray-0 p-2 mt-2 border-0">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class=""><span>پیتزا زبان ژیوا متوسط</span></div>
                                    <div class=" "><i class="fas fa-times fa-lg" style="color:#929292"></i></div>
                                </div>
                                <div class="d-flex flex-row justify-content-between mt-3">
                                    <div class="">
                                        <span class="icon-order-count"><i class="fas fa-plus"></i> </span>
                                        <span>1</span>
                                        <span class="icon-order-count"><i class="fas fa-minus"></i> </span>
                                    </div>
                                    <div class="">36,800 تومان</div>
                                </div>
                            </div>
                            <div class="card bg-gray-0 p-2 mt-2 border-0">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class=""><span>پیتزا زبان ژیوا متوسط</span></div>
                                    <div class=" "><i class="fas fa-times fa-lg" style="color:#929292"></i></div>
                                </div>
                                <div class="d-flex flex-row justify-content-between mt-3">
                                    <div class="">
                                        <span class="icon-order-count"><i class="fas fa-plus"></i> </span>
                                        <span>1</span>
                                        <span class="icon-order-count"><i class="fas fa-minus"></i> </span>
                                    </div>
                                    <div class="">36,800 تومان</div>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between font-weight-bold mt-2">
                                <span>مبلغ سفارش</span>
                                <span>1330000 تومان</span>
                            </div>
                            <hr>
                            <small>هزینه ارسال بعد از انتخاب آدرس نمایش داده می‌شود.</small>
                            <span class="d-block mt-2">تحویل غذا:</span>
                            <small class="d-block my-3 text-gray-light">ارسال به شما (تحویل در محل رستوران ندارد)</small>
                            <button type="button" class="btn btn-success btn-block">تایید سفار ش</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
