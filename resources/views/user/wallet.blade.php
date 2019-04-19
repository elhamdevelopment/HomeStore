@extends('layouts.user')

@section('content')
    <div class="row">

        <div class="col-2">
            <div class="card card-icon mb-4">
                <div class="card-body text-center">
                    <i class="i-Money-2"></i>
                    <p class="text-muted mt-2 mb-2">اعتبار فعلی</p>
                    <p class="lead text-22 m-0">4500 تومان</p>
                </div>
            </div>
        </div>
        <div class="col-10 m-auto">
            <div class="card o-hidden mb-4">
                <div class="card-header">
                    <i class="i-Credit-Card text-muted ml-2"></i>افزایش موجودی
                </div>
                <div class="card-body text-center">
                    <form action="" class="">
                        <div class="form-group">
                            <input type="text" name="creadit" id="creadit" class="form-control"
                                   placeholder="مبلغ مورد نظر برای افزایش حساب (تومان)"
                                   required>
                        </div>
                        <div class="form-check border p-2 rounded">
                            <label class="custom-control custom-radio custom-control-inline mt-2">
                                <input type="radio" class="custom-control-input" checked id="wallet"
                                       name="radio-address">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description"><i
                                            class="i-Credit-Card ml-1"></i> کیف پول

                                                </span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline ">
                                <input type="radio" class="custom-control-input" id="online"
                                       name="radio-address">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description"><i class="i-Bank ml-1"></i> پرداخت آنلاین</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cash"
                                       name="radio-address">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description"><i
                                            class="i-Cash-register-2 ml-1"></i>نقدی در محل</span>
                            </label>
                        </div>
                        <div class="form-group text-left">
                            <button type="button" class="btn btn-primary btn-raised btn-lg btn-raised"><i
                                        class="fas fa-money-bill ml-2 "></i>افزایش موجودی
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
