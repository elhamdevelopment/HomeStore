@extends('layouts.user')

@section('content')
    <div class="breadcrumb d-flex flex-row justify-content-between">
        <h1 class="text-responsive text-secondary"><i class="i-Receipt-3 md-48"></i> لیست سفارشات</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row" ng-controller="orderController" ng-init="getOrder()">
        <div class="col-12 col-md-10 mb-2 m-auto " ng-repeat="order in userOrder">
            <div id="orderList" class="card rounded o-hidden mb-4 p-1 ">
                <div class="d-flex flex-column flex-sm-row">
                    <div class="d-flex flex-column justify-content-start">
                        <img class="card-img-responsive p-1" src="/assets/images/photo-wide-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 d-flex flex-column  align-items-sm-start align-items-center px-2 line-height-2 text-right">
                        <p class="m-0 text-primary font-weight-bold text-responsive">@{{ order.shop.title }}</p>
                        <p class="m-0 text-small text-muted"><span>شماره سفارش</span> @{{ order.id }}</p>
                        <p class="text-success font-size-11 font-weight-bold m-0"><span>قیمت سفارش</span> @{{ order.price }}</p>
                        <p class="text-muted font-size-11 text-responsive m-0"><i
                                    class="fas fa-check font-size-12 text-success ml-2"></i><span>وضعیت سفارش</span> @{{ order.status }}</p>
                    </div>
                    <div class="p-1 d-flex flex-column justify-content-between">
                        <div class="d-flex flex-column">
                            <button type="button" class="btn btn-accent btn-raised btn-block"><i
                                        class="i-ID-Card ml-2"></i> نمایش جزیات سفارش
                            </button>
                            <button type="button" class="btn btn-white-border btn-raised mt-2 btn-block "><i
                                        class="i-Speach-Bubble-2 ml-3"></i>ثبت نظر
                            </button>
                        </div>
                        <div class="text-muted font-size-10 my-1 d-flex flex-column justify-content-end align-self-center">
                            @{{ order.created_at | jalaliDate:'dddd، jD jMMMM jYYYY [ساعت] LT' }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
