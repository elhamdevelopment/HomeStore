@extends('layouts.user')

@section('content')
    <div class="breadcrumb d-flex flex-row justify-content-between" ng-controller="orderController">
        <h1 class="text-responsive text-secondary"><i class="i-Receipt-3 md-48"></i> جزیات سفارشات</h1>
    </div>

    <div class="separator-breadcrumb border-top"></div>
    <div class="d-flex flex-column flex-lg-row" ng-controller="orderController" ng-init="getOrderById()">
        <pre dir="ltr" class="text-left">  @{{ order | json }}</pre>
        <div class="col-12 col-lg-3 col-xl34  pr-0 pl-0 pl-lg-3">
            <div class="card  bg-white card-shadow border-0" style="min-height: 360px">
                <div class="card-body text-center">
                    <div class="d-flex flex-row"></div>
                    <img ng-src="@{{order.shops.logo}}" alt="..." class="img-thumbnail  w-50">
                    <h4 class="pt-2 font-weight-bold text-secondary">@{{order.shops.title}}</h4>
                    <div class="pb-2 ">
                    <span class="star-rating">
                            <i class="material-icons text-warning"
                               ng-style="{'width': (order.shops.total_rate * 100) /5 +'%'}"></i>
                        </span>
                        <span class="font-weight-bold font-size-14 text-secondary">@{{ order.shops.total_rate }}</span>
                    </div>

                    <span class="card-text pt-2">@{{order.shops.description}}</span>
                    <hr class="my-3">
                    <span class="card-text text-muted pt-2 d-block">  <i class="i-Map-Marker"></i> @{{ order.shops.address }}</span>

                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-xl-3 px-0 mt-3 mt-lg-0 pl-lg-3">
            <div class="card bg-white card-shadow border-0" style="min-height: 360px">
                <div class="card-body">
                    <div class="text-success font-weight-bold text-center pb-4"><i
                                class="material-icons md-24 text-success">check_circle</i>
                        <span class="font-size-12" ng-show="order.status==0"> سفارش با موفقیت انجام شده.</span></div>
                    <div class="d-flex flex-row justify-content-between pb-2 mt-2 text-gray-light border-bottom">
                        <span>شماره سفارش</span>
                        <span>@{{ order.id }}</span>
                    </div>
                    <div class="d-flex flex-row justify-content-between pb-2 font-weight-light text-gray-light border-bottom mt-2">
                        <span>تاریخ سفارش</span>
                        <span>@{{ order.order_date | jalaliDate:'jYYYY/jM/jD' }}</span>
                    </div>
                    <div class="d-flex flex-row justify-content-between pb-2 font-weight-light text-gray-light border-bottom mt-2">
                        <span>ساعت سفارش</span>
                        <span> @{{ order.order_date | jalaliDate:'hh:mm:ss' }}</span>
                    </div>
                    <div class="d-flex flex-row justify-content-between mt-2 text-success">
                        <span>مجموع پرداختی</span>
                        <span>@{{ order.price }}</span>
                    </div>

                    <span class="text-center text-muted pt-5 d-inline-block">  <i class="i-Male pl-2"></i> @{{ order.address }}</span>

                </div>

            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-6 px-0 mt-3 mt-lg-0">
            <div class="card bg-white card-shadow border-0" style="min-height: 350px">
                <div class="d-flex flex-row align-items-start border-bottom  font-size-11 p-2">
                    <i class="i-Checkout pl-2"></i> <span>جزییات سفارش</span>
                </div>
                <div class="card-body">
                    <div class="card bg-gray-100 card-shadow  p-2">
                        <div class="media" ng-repeat="detail in order.order_detail">
                            <img src="@{{detail.products.image_url}}" class="ml-3 img-thumbnail" alt="..."
                                 style="max-width: 100px">
                            <div class="media-body">
                                <h5 class="mt-0">@{{  detail.products.title }}</h5>
                             @{{ detail.count }} عدد
                            </div>
                            @{{ detail.price * detail.count }} تومان
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between font-weight-bold text-secondary mt-2">
                        <span>مبلغ سفارش</span>
                        <span>@{{ order.price }}تومان</span>
                    </div>
                    <hr>
                    <div class="d-flex flex-row justify-content-between font-weight-bold mt-2 text-danger">
                        <span>مجموع تخفیفات</span>
                        <span>@{{ order.discount }} تومان</span>
                    </div>
                    <hr>
                    <div class="d-flex flex-row font-size-12 justify-content-between font-weight-bold mt-2 text-success">
                        <span>مجموع پرداختی</span>
                        <span>@{{ order.price - order.discount }} تومان</span>
                    </div>
                    <hr class="">
                    <div class="text-muted font-size-10 my-2"><i class="ml-2-5 fas fa-shield-alt "></i> @{{
                        order.shops.delivery_price }}
                    </div>
                    <div class="text-muted font-size-10 my-2"><i class="ml-2-5 fas fa-check-circle "></i> @{{
                        order.payment_type }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
