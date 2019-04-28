@extends('layouts.app')

@section('content')
    @include('partials._add-address-modal')
    <div class="container font-size-11 accordion" id="orderWizard" style="min-height: 350px">
        <div id="navigateWizard" class="card mb-3">
            <div class="px-4 wizard">
                <ul class="d-flex pt-3 pr-0 mb-3">
                    <li class="col-4 d-flex justify-content-center text-center active" data-toggle="collapse"
                        data-target="#step1" aria-expanded="false">
                        <span><span class="d-block mx-auto rounded-circle mb-1">1</span>سبد خرید
                                </span></li>
                    <li class="col-4 d-flex justify-content-center text-center active" data-toggle="collapse"
                        data-target="#step2" aria-expanded="false"><span><span
                                    class="d-block mx-auto rounded-circle mb-1">2</span>تکمیل
                                اطلاعات سفارش</span></li>
                    <li class="col-4 d-flex justify-content-center text-center" data-toggle="collapse"
                        data-target="#step3" aria-expanded="false"><span><span
                                    class="d-block mx-auto rounded-circle mb-1">3</span>پرداخت</span></li>
                </ul>
            </div>
        </div>
        <div id="contentWizard" class="row">
            <div id="step1" data-parent="#orderWizard" class="collapse  col-12">
                <div class="">
                    @include('partials._shopping-cart-content')
                </div>
            </div>
            <div id="step2" data-parent="#orderWizard" class="collapse col-12">
                <div class="card">
                    <div class="card-body p-5" style="min-height: 355px;">
                        <form action="" class="">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="">
                                    <div class="form-check">
                                        <label class="custom-control custom-radio custom-control-inline mb-3">
                                            <input type="radio" class="custom-control-input" checked id="one"
                                                   name="radio-address">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">خانه</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline mb-3">
                                            <input type="radio" class="custom-control-input" id="one"
                                                   name="radio-address">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">محل کار</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline mb-3">
                                            <input type="radio" class="custom-control-input" id="one"
                                                   name="radio-address">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">دوست</span>
                                        </label>
                                    </div>

                                </div>
                                <div class="d-flex align-items-start">
                                    <button type="button" class="btn btn-white-border btn-raised" data-toggle="modal" data-target="#addressModal">
                                        <i class="fas fa-plus ml-2"></i> ثبت آدرس جدید
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex d-table-row font-size-11">
                                <span class="font-weight-bold ml-2"> آدرس تحویل سفارش : </span>
                                <p>شیراز - خیابان زند کوچه 18 ساختمان پزشکان واحد 24</p>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-comment-alt"></i>
                                        </div>

                                    </div>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                              placeholder="توضیحات سفارش" rows="3"></textarea>
                                    {{--<input type="text" name="" id="" class="form-control" placeholder="توضیحات سفارش">--}}
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12 col-md-6 m-auto">
                                <div class="d-flex flex-row justify-content-between font-size-11 mt-2 text-gray-light">
                                    <span>مبلغ سفارش</span>
                                    <span>{{ number_format(12300000) }} تومان</span>
                                </div>
                                <hr>
                                <div class="d-flex flex-row justify-content-between font-size-11 font-weight-light mt-2 text-accent">
                                    <span>تخفیف</span>
                                    <span>0</span>
                                </div>
                                <hr>
                                <div class="d-flex flex-row justify-content-between font-size-12 font-weight-bold  mt-2 text-success">
                                    <span>مبلغ قابل پرداخت</span>
                                    <span>{{ number_format(50000000) }} تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white d-flex flex-row justify-content-between">
                        <button type="button" class="btn btn-white-border btn-raised">
                            <i class="fas fa-arrow-right ml-2"></i>بازگشت
                        </button>
                        <button type="button" class="btn btn-primary btn-raised">
                            تایید و ادامه خرید<i class="fas fa-arrow-left mr-2"></i>
                        </button>

                    </div>
                </div>
            </div>
            <div id="step3" data-parent="#orderWizard" class="collapse show col-12">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="col-12 col-lg-8 col-xl-9  pr-0 pl-0 pl-lg-3">
                        <div class="card">
                            <div class="w-100 discount-code">
                                <div class="m-4">
                                    <div class="form-group mb-0">
                                        <label class="custom-control custom-checkbox mb-0" data-toggle="collapse"
                                               data-target="#discountCodeCollapse" aria-expanded="true"
                                               aria-controls="discountCodeCollapse">
                                            <input type="checkbox" class="custom-control-input" value="1">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description font-weight-bold mb-0 h6 pr-2">کد تخفیف دارم.</span>
                                        </label>
                                    </div>
                                    <div id="discountCodeCollapse" class="collapse" aria-expanded="false" style="">
                                        <div id="formDiscountCode" class="form-inline justify-content-between pt-3">
                                            <label for="discountCode">کد تخفیف خود را وارد و گزینه ثبت کد را
                                                انتخاب
                                                نمایید:</label>
                                            <div class="input-group">
                                                <input type="text" id="discountCode" autocomplete="off"
                                                       name="discountCode"
                                                       class="form-control ltr-ls-1 ltr-if-dirty en"
                                                       placeholder="کد تخفیف">

                                                <span class="input-group-btn">
                                                        <button id="enterDiscountCode" type="button"
                                                                class="btn btn-primary">ثبت کد</button>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="w-100 gift-card">
                                <div class="m-4">
                                    <div class="form-group mb-0">
                                        <label class="custom-control custom-checkbox mb-0" data-toggle="collapse"
                                               data-target="#giftCardCollapse" aria-expanded="true"
                                               aria-controls="giftCardCollapse">
                                            <input type="checkbox" class="custom-control-input" value="1">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description font-weight-bold h6 mb-0 pr-2">کارت هدیه دارم.</span>
                                        </label>
                                    </div>
                                    <div id="giftCardCollapse" class="collapse" aria-expanded="true">

                                        <div id="formGiftCard" class="form-inline justify-content-between pt-3">
                                            <label for="giftCardNo">کد کارت تخفیف خود را وارد و گزینه ثبت کد را
                                                انتخاب
                                                نمایید:</label>
                                            <div class="input-group">
                                                <input type="text" id="giftCardNo" autocomplete="off" name="giftCardNo"
                                                       class="form-control ltr-ls-1 ltr-if-dirty en" required=""
                                                       placeholder="شماره کارت تخفیف">


                                                <span class="input-group-btn">
                                                        <button id="enterGiftCard" type="button"
                                                                class="btn btn-primary">ثبت کد</button>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2" style="min-height: 300px">
                            <div class="card-body">
                                <form action="">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="custom-control custom-radio custom-control-inline mb-3">
                                                <input type="radio" class="custom-control-input" checked id="wallet"
                                                       name="radio-address">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description"><i
                                                            class="fas fa-wallet ml-1"></i> کیف پول

                                                </span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline mb-3">
                                                <input type="radio" class="custom-control-input" id="online"
                                                       name="radio-address">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description"><i class="fas fa- ml-1"></i> پرداخت آنلاین</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline mb-3">
                                                <input type="radio" class="custom-control-input" id="cash"
                                                       name="radio-address">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description"><i
                                                            class="fas fa-wallet ml-1"></i>نقدی در محل</span>
                                            </label>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="card-footer bg-white d-flex flex-row justify-content-between">
                                <button type="button" class="btn btn-white-border btn-raised">
                                    <i class="fas fa-arrow-right ml-2"></i>بازگشت
                                </button>
                                <button type="button" class="btn btn-success btn-raised">
                                    تایید و پرداخت<i class="fas fa-check mr-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="paymentInfo" class="col-12 col-lg-4 col-xl-3 px-0 mt-3 mt-lg-0" >
                        <div class="card bg-white card-shadow border-0" >
                            <div class="d-flex flex-row align-items-start border-bottom  font-size-11 p-2">
                                <span>جزییات پرداخت</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between mt-2 text-gray-light">
                                    <span>مبلغ سفارش</span>
                                    <span>1330000 تومان</span>
                                </div>
                                <div class="d-flex flex-row justify-content-between font-weight-light mt-2 text-accent">
                                    <span>تخفیف</span>
                                    <span> 10,0000 تومان</span>
                                </div>
                                <div class="d-flex flex-row justify-content-between font-weight-bold  mt-2 text-success">
                                    <span>مبلغ قابل پرداخت</span>
                                    <span> 150,0000 تومان</span>
                                </div>
                                <hr class="py-2">
                                <span class="d-inline-block my-2 text-right text-muted font-size-11"> بعد ار پرداخت فاکتور برای شما ثبت خواهد شد</span>
                                <div class="text-muted font-size-10 my-2"><i class="ml-2-5 fas fa-shield-alt "></i>
                                    پرداخت امن
                                </div>
                                <div class="text-muted font-size-10 my-2"><i class="ml-2-5 fas fa-check-circle "></i>
                                    100% حفاظت از پرداخت، قوانین بازپرداخت آسان
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
