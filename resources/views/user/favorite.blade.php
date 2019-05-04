@extends('layouts.user')

@section('content')

    <div class="row" ng-controller="profileController" ng-init="getUserFavorite()">
        <pre>  @{{favorite | json}}</pre>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2" ng-repeat="shop in favShops">
            <div class="card">
                <div class="favorite-btn">
                    <i class="fas fa-trash fa-lg" title="حذف" ng-click="delete($index,shop.id)"></i>
                </div>
                <div class="card-body text-center">
                    <img src="/img/shoplogo.jpg" ng-src="shop.logo" alt="..." class="img-thumbnail">
                    <h5 class="">@{{shop.title}}</h5>
                    <small class="card-text">@{{shop.description}}</small>
                    <div class="">
                    <span class="star-rating">
                        @{{ shop.total_rate }}
                            <i class="material-icons text-warning" style="width: 100%;"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
