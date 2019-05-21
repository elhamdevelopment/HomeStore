@extends('layouts.user')

@section('content')
    <div class="row">
        <div class="col-6 col-md-3">
            <div class="card card-icon mb-4">
                <div class="card-body text-center">
                    <p>
                        <i class="i-Depression text-danger pr-3"></i>
                        <i class="i-Confused pr-3"></i>
                        <i class="i-Smile text-success "></i>
                    </p>
                    <p class="text-muted mt-2 mb-2">وضعیت رضایت</p>
                    <p class="lead text-22 m-0">راضی</p>
                </div>
            </div>
            <div class="card card-icon mb-4">

                <div class="card-body text-center">
                    {{--<input type="range" class="custom-range" min="1" max="5" step="1"  id="rateSlider">--}}
                    <div class="slider-example">
                        <div class="mb-3 slider-default" id="slider-handles">
                        </div>
                    </div>
                    <i class="material-icons text-warning" style="width: 100%;"></i>
                    <p class="text-muted mt-2 mb-2">امتیاز که شما به رستوران دادید:</p>
                    <p class="lead text-22 m-0">فست فود شن</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-9" ng-controller="walletController">
            <div class="card o-hidden mb-4">
                <div class="card-header">
                    <i class="i-Speach-Bubble-13 text-muted ml-2"></i>فرم ثبت نظر
                </div>
                <div class="card-body">
                    <form action="#" novalidate id="contactForm">
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
@endsection
