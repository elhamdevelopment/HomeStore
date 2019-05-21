@extends('layouts.user')

@section('content')
    <div class="row">
        <div class="col-12" ng-controller="walletController" ng-init="getWalletTransaction()">
            <div class="card o-hidden mb-4">
                <div class="card-header">
                    <i class="i-Receipt-3 pl-3 text-muted"></i>لیست تراکنش های کیف پول
                </div>
                <div class="card-body text-center">
                    <div ng-repeat="trans in walletTrans">
                        <div class="d-flex flex-row justify-content-start">
                            <span>@{{ trans.id }}</span>
                            <span>@{{ trans.created_at | jalaliDate:'dddd، jD jMMMM jYYYY [ساعت] LT' }}</span>
                            <span>@{{ trans.amount }}</span>
                            <i class="material-icons text-purple pl-2" ng-show="address.transaction_type==true">add</i>
                            <i class="material-icons text-gray-light pl-2" ng-show="address.transaction_type==false">remove</i>
                            <p class="ml-auto m-0 pr-2"><strong>توضیحات: </strong>@{{trans.description}}</p>
                        </div>
                        <hr class="my-2">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
