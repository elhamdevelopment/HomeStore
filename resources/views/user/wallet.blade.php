@extends('layouts.user')

@section('content')
    <div class="row">
        <div class="col-2">
            <div class="card card-icon mb-4">
                <div class="card-body text-center">
                    <i class="i-Money-2"></i>
                    <p class="text-muted mt-2 mb-2">اعتبار فعلی</p>
                    <p class="lead text-22 m-0"></p>
                </div>
            </div>
        </div>
        <div class="col-10 m-auto" ng-controller="walletController">
            <div class="card o-hidden mb-4">
                <div class="card-header">
                    <i class="i-Credit-Card text-muted ml-2"></i>افزایش موجودی
                </div>
                <div class="card-body">
                    <form action="" class="" id="increaseCreditForm">
                        <div class="form-group">
                            <input type="text" name="amount" id="amount" ng-model="amount" data-rule-digits="true"
                                   data-rule-min="1000" data-rule-required="true" class="form-control"
                                   placeholder="مبلغ مورد نظر برای افزایش حساب (تومان)">
                        </div>
                        <div class="form-check border p-2 rounded text-center">
                            <label class="custom-control custom-radio custom-control-inline mt-2">
                                <input type="radio" class="custom-control-input" checked id="wallet"
                                       name="radio-address">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">        <i class="ibl64 ibl-mellat"></i> بانک ملت

                                                </span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline ">
                                <input type="radio" class="custom-control-input" id="online"
                                       name="radio-address">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description"><i
                                            class="ibl64 ibl-bpi"></i> بانک پاسارگاد</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cash"
                                       name="radio-address">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description"><i class="ibl64 ibl-parsian"></i> بانک پارسیان</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cash"
                                       name="radio-address">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description"><i
                                            class="ibl64 ibl-sb"></i>بانک سامان</span>
                            </label>
                        </div>
                        <div class="form-group text-left">
                            <button ng-click="addCredit(amount)" type="button"
                                    class="btn btn-primary btn-raised btn-lg btn-raised"><i
                                        class="fas fa-money-bill ml-2 "></i>افزایش موجودی
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
