@extends('layouts.user')

@section('content')

    <div class="row" ng-controller="profileController" ng-init="getUserAddress()">

        @include('partials._add-address-modal')
        <div class="col-10 m-auto">
            <div class="card o-hidden mb-4">
                <div class="card-header  d-flex justify-content-start">
                    <i class="i-Address-Book text-muted ml-2"></i>آدرس های من
                    <button type="button" class="btn btn-white-border btn-raised mr-auto" data-toggle="modal"
                            data-target="#addressModal">
                        <i class="fas fa-plus ml-2"></i> ثبت آدرس جدید
                    </button>
                </div>
                <div class="card-body text-center">

                    <div ng-repeat="address in userAddress">
                        <div class="d-flex flex-row justify-content-start">
                            <i class="material-icons text-purple pl-2" ng-show="address.is_default==true">radio_button_checked</i>
                            <i class="material-icons text-gray-light pl-2" ng-show="address.is_default==false">radio_button_unchecked</i>
                            <span class="badge badge-secondary">@{{address.title}}</span>
                            <p class="ml-auto m-0 pr-2"><strong>آدرس: </strong>@{{address.address}}</p>
                            <i class="material-icons hover  ml-2 pointer" data-toggle="tooltip" title="حذف آدرس" ng-click="deleteAddress($index,address.id)">delete</i>
                            <i class="material-icons hover pointer" title="ویرایش" ng-click="getAddressById(address.id)">edit</i>
                        </div>
                        <hr class="my-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
