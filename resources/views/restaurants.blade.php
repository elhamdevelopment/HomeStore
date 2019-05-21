@extends('layouts.app')

@section('content')
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
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3 d-none d-lg-block">
                <div class="card card-shadow border-0 text-right">
                    <div class="card-header bg-white py-2">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <div>
                                <i class="material-icons hover border rounded-lg md-24">
                                    grid_on
                                </i>
                                <i class="material-icons hover border rounded-lg md-24">
                                    list
                                </i>
                            </div>
                            <div>
                                <span><i class="fa fa-filter ml-1 text-muted"></i>
                                <a href="#">حذف فیلتر</a>
                                </span>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" id="SearchLocation"
                                       placeholder="جستجو رستوران یا غذا">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i
                                                class="fa fa-search ml-1"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="pt-4">
                            <div class="form-group">
                                <label class="switch switch-primary">
                                    <span>تخفیف دار</span>
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="switch switch-primary">
                                    <span>موتور ایزی فود</span>
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="divider"></div>
                    <div class="card-body">

                        <span class="d-block font-weight-bold pb-3">نوع رستوران</span>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="loginRememberMe" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">فست فورد</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="loginRememberMe" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">ایرانی</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="loginRememberMe" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">تهیه غذا</span>
                            </label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-body">
                        <span class="d-block pb-3 font-weight-bold">نوع غذا</span>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="loginRememberMe" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">پیتزا</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="loginRememberMe" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">هات داگ</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="loginRememberMe" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">برگر</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card position-relative card-shadow text-center">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg"></i>
                            </div>
                            <div class="TagCard-container">
                                <div class="visibilityTags-main">
                                    <label class="credit-selectBank-lbl visibilityTag-label ng-binding">
                                        منتخب
                                    </label>
                                    <div class="triangle-bottomleft"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                {{--<span class="off-tag">10%</span>--}}
                                <img src="img/shoplogo.jpg" alt="..." class="img-thumbnail">

                                <h5 class="card-title">فست فود باباعلی</h5>
                                <small class="text-gray-light">فست فور</small>
                                <div class="middle-line font-size-10">
                                    <span>124</span> <i class="far fa-user"></i>
                                    <span class="badge badge-success p-2 text-center" style="font-weight: 500"><span
                                                class="">4.6</span><i class="fa fa-star fa-xs mr-1"></i></span>
                                </div>
                                <div class="p-2 border-light rounded-lg bg-gray-0 border d-flex flex-row justify-content-between my-2">
                                    <span>میدان ولی عصر</span>
                                    <span class="font-weight-bold font-size-13" style="letter-spacing: 2px">$$$</span>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-success btn-block btn-raised btn-sm m-auto">
                                        <i class="fas fa-list-alt ml-2"></i><span>نمایش منو</span></button>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="w-100 p-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex justify-content-start">
                                        <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                        <span class="d-flex align-self-center mr-2">پیک رستوران</span>
                                    </div>
                                    <span>   {{number_format(120000)}} تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card card-shadow text-center">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg"></i>
                            </div>
                            <div class="card-body">
                                <img src="img/res1.png" alt="..." class="img-thumbnail">
                                <h5 class="card-title">فست فود باباعلی</h5>
                                <small class="text-gray-light">فست فور</small>
                                <div class="middle-line font-size-10">
                                    <span>124</span> <i class="far fa-user"></i>
                                    <span class="badge badge-success p-2 text-center" style="font-weight: 500"><span
                                                class="">4.6</span><i class="fa fa-star fa-xs mr-1"></i></span>
                                </div>
                                <div class="p-2 border-light rounded-lg bg-gray-0 border d-flex flex-row justify-content-between my-2">
                                    <span>میدان ولی عصر</span>
                                    <span class="font-weight-bold font-size-13" style="letter-spacing: 2px">$$$</span>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-success btn-block btn-raised btn-sm m-auto">
                                        <i class="fas fa-list-alt ml-2"></i><span>نمایش منو</span></button>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="w-100 p-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex justify-content-start">
                                        <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                        <span class="d-flex align-self-center mr-2">پیک رستوران</span>
                                    </div>
                                    <span>   {{number_format(120000)}} تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card card-shadow text-center">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg"></i>
                            </div>
                            <div class="card-body">
                                <img src="img/res2.png" alt="..." class="img-thumbnail">
                                <h5 class="card-title">فست فود باباعلی</h5>
                                <small class="text-gray-light">فست فور</small>
                                <div class="middle-line font-size-10">
                                    <span>124</span> <i class="far fa-user"></i>
                                    <span class="badge badge-success p-2 text-center" style="font-weight: 500"><span
                                                class="">4.6</span><i class="fa fa-star fa-xs mr-1"></i></span>
                                </div>
                                <div class="p-2 border-light rounded-lg bg-gray-0 border d-flex flex-row justify-content-between my-2">
                                    <span>میدان ولی عصر</span>
                                    <span class="font-weight-bold font-size-13" style="letter-spacing: 2px">$$$</span>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-success btn-block btn-raised btn-sm m-auto">
                                        <i class="fas fa-list-alt ml-2"></i><span>نمایش منو</span></button>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="w-100 p-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex justify-content-start">
                                        <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                        <span class="d-flex align-self-center mr-2">پیک رستوران</span>
                                    </div>
                                    <span>   {{number_format(120000)}} تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card card-shadow text-center">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg"></i>
                            </div>
                            <div class="card-body">
                                <img src="img/res3.png" alt="..." class="img-thumbnail">
                                <h5 class="card-title">بیرون بر صوفی (ستارخان)</h5>
                                <small class="text-gray-light">فست فور</small>
                                <div class="middle-line font-size-10">
                                    <span>124</span> <i class="far fa-user"></i>
                                    <span class="badge badge-success p-2 text-center" style="font-weight: 500"><span
                                                class="">4.6</span><i class="fa fa-star fa-xs mr-1"></i></span>
                                </div>
                                <div class="p-2 border-light rounded-lg bg-gray-0 border d-flex flex-row justify-content-between my-2">
                                    <span>میدان ولی عصر</span>
                                    <span class="font-weight-bold font-size-13" style="letter-spacing: 2px">$$$</span>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-success btn-block btn-raised btn-sm m-auto">
                                        <i class="fas fa-list-alt ml-2"></i><span>نمایش منو</span></button>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="w-100 p-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex justify-content-start">
                                        <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                        <span class="d-flex align-self-center mr-2">پیک رستوران</span>
                                    </div>
                                    <span>   {{number_format(120000)}} تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card card-shadow text-center">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg"></i>
                            </div>
                            <div class="card-body">
                                <img src="img/res5.png" alt="..." class="img-thumbnail">
                                <h5 class="card-title">فست فود باباعلی</h5>
                                <small class="text-gray-light">فست فور</small>
                                <div class="middle-line font-size-10">
                                    <span>124</span> <i class="far fa-user"></i>
                                    <span class="badge badge-success p-2 text-center" style="font-weight: 500"><span
                                                class="">4.6</span><i class="fa fa-star fa-xs mr-1"></i></span>
                                </div>
                                <div class="p-2 border-light rounded-lg bg-gray-0 border d-flex flex-row justify-content-between my-2">
                                    <span>میدان ولی عصر</span>
                                    <span class="font-weight-bold font-size-13" style="letter-spacing: 2px">$$$</span>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-success btn-block btn-raised btn-sm m-auto">
                                        <i class="fas fa-list-alt ml-2"></i><span>نمایش منو</span></button>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="w-100 p-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex justify-content-start">
                                        <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                        <span class="d-flex align-self-center mr-2">پیک رستوران</span>
                                    </div>
                                    <span>   {{number_format(120000)}} تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card card-shadow text-center">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg"></i>
                            </div>
                            <div class="card-body">
                                <img src="img/res4.png" alt="..." class="img-thumbnail">
                                <h5 class="card-title">فست فود باباعلی</h5>
                                <small class="text-gray-light">فست فور</small>
                                <div class="middle-line font-size-10">
                                    <span>124</span> <i class="far fa-user"></i>
                                    <span class="badge badge-success p-2 text-center" style="font-weight: 500"><span
                                                class="">4.6</span><i class="fa fa-star fa-xs mr-1"></i></span>
                                </div>
                                <div class="p-2 border-light rounded-lg bg-gray-0 border d-flex flex-row justify-content-between my-2">
                                    <span>میدان ولی عصر</span>
                                    <span class="font-weight-bold font-size-13" style="letter-spacing: 2px">$$$</span>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-success btn-block btn-raised btn-sm m-auto">
                                        <i class="fas fa-list-alt ml-2"></i><span>نمایش منو</span></button>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="w-100 p-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex justify-content-start">
                                        <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                        <span class="d-flex align-self-center mr-2">پیک رستوران</span>
                                    </div>
                                    <span>   {{number_format(120000)}} تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
