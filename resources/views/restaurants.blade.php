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
            <div class="col-3">
                <div class="card text-right">
                    <div class="card-header">
                        <span><i class="fa fa-filter fa-2x ml-1 text-dark"></i>فیلتر</span>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control border-primary" id="SearchLocation"
                                       placeholder="جستجو رستوران یا غذا">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-primary"><i
                                                class="fa fa-search ml-1"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="loginRememberMe" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">تخیف دار</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="loginRememberMe" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">موتور چیلی</span>
                            </label>
                        </div>
                        <hr>
                        <span class="d-block pb-3">نوع رستوران</span>
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
                        <span class="d-block pb-3">نوع غذا</span>
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

                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4 mb-2">
                        <div class="card">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg" ></i>
                            </div>
                            <div class="card-body">
                                <img src="img/shoplogo.jpg" alt="..." class="img-thumbnail">
                                <h5 class="card-title">شن</h5>
                                <small class="card-text">فست فور</small>
                                <div class="middle-line">
                                    <span>124</span> <i class="fa fa-user-o"></i>
                                    <span class="badge badge-success p-2"><i class="fa fa-star"></i>4.6</span>
                                </div>
                            </div>
                            <div class="p-2 border-light bg-light border d-flex flex-row justify-content-between my-2">
                                <span>میدان ولی عصر</span>
                                <span>$$$</span>
                            </div>
                            <div class="mb-2">
                                <button type="button" class="btn btn-success btn-sm w-50 m-auto">نمایش منو</button>
                            </div>
                            <div class="card-footer">
                                <div class=" d-flex flex-row justify-content-between">
                                    <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                    <span>پیک رستوران</span>
                                    <span>120000 تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2">
                        <div class="card">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg" ></i>
                            </div>
                            <div class="card-body">
                                <img src="img/shoplogo.jpg" alt="..." class="img-thumbnail">
                                <h5 class="card-title">شن</h5>
                                <small class="card-text">فست فور</small>
                                <div class="middle-line">
                                    <span>124</span> <i class="fa fa-user-o"></i>
                                    <span class="badge badge-success p-2"><i class="fa fa-star"></i>4.6</span>
                                </div>
                            </div>
                            <div class="p-2 border-light bg-light border d-flex flex-row justify-content-between my-2">
                                <span>میدان ولی عصر</span>
                                <span>$$$</span>
                            </div>
                            <div class="mb-2">
                                <button type="button" class="btn btn-success btn-sm w-50 m-auto">نمایش منو</button>
                            </div>
                            <div class="card-footer">
                                <div class=" d-flex flex-row justify-content-between">
                                    <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                    <span>پیک رستوران</span>
                                    <span>120000 تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2">
                        <div class="card">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg" ></i>
                            </div>
                            <div class="card-body">
                                <img src="img/shoplogo.jpg" alt="..." class="img-thumbnail">
                                <h5 class="card-title">شن</h5>
                                <small class="card-text">فست فور</small>
                                <div class="middle-line">
                                    <span>124</span> <i class="fa fa-user-o"></i>
                                    <span class="badge badge-success p-2"><i class="fa fa-star"></i>4.6</span>
                                </div>
                            </div>
                            <div class="p-2 border-light bg-light border d-flex flex-row justify-content-between my-2">
                                <span>میدان ولی عصر</span>
                                <span>$$$</span>
                            </div>
                            <div class="mb-2">
                                <button type="button" class="btn btn-success btn-sm w-50 m-auto">نمایش منو</button>
                            </div>
                            <div class="card-footer">
                                <div class=" d-flex flex-row justify-content-between">
                                    <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                    <span>پیک رستوران</span>
                                    <span>120000 تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2">
                        <div class="card">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg" ></i>
                            </div>
                            <div class="card-body">
                                <img src="img/shoplogo.jpg" alt="..." class="img-thumbnail">
                                <h5 class="card-title">شن</h5>
                                <small class="card-text">فست فور</small>
                                <div class="middle-line">
                                    <span>124</span> <i class="fa fa-user-o"></i>
                                    <span class="badge badge-success p-2"><i class="fa fa-star"></i>4.6</span>
                                </div>
                            </div>
                            <div class="p-2 border-light bg-light border d-flex flex-row justify-content-between my-2">
                                <span>میدان ولی عصر</span>
                                <span>$$$</span>
                            </div>
                            <div class="mb-2">
                                <button type="button" class="btn btn-success btn-sm w-50 m-auto">نمایش منو</button>
                            </div>
                            <div class="card-footer">
                                <div class=" d-flex flex-row justify-content-between">
                                    <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                    <span>پیک رستوران</span>
                                    <span>120000 تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2">
                        <div class="card">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg" ></i>
                            </div>
                            <div class="card-body">
                                <img src="img/shoplogo.jpg" alt="..." class="img-thumbnail">
                                <h5 class="card-title">شن</h5>
                                <small class="card-text">فست فور</small>
                                <div class="middle-line">
                                    <span>124</span> <i class="fa fa-user-o"></i>
                                    <span class="badge badge-success p-2"><i class="fa fa-star"></i>4.6</span>
                                </div>
                            </div>
                            <div class="p-2 border-light bg-light border d-flex flex-row justify-content-between my-2">
                                <span>میدان ولی عصر</span>
                                <span>$$$</span>
                            </div>
                            <div class="mb-2">
                                <button type="button" class="btn btn-success btn-sm w-50 m-auto">نمایش منو</button>
                            </div>
                            <div class="card-footer">
                                <div class=" d-flex flex-row justify-content-between">
                                    <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                    <span>پیک رستوران</span>
                                    <span>120000 تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2">
                        <div class="card">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg" ></i>
                            </div>
                            <div class="card-body">
                                <img src="img/shoplogo.jpg" alt="..." class="img-thumbnail">
                                <h5 class="card-title">شن</h5>
                                <small class="card-text">فست فور</small>
                                <div class="middle-line">
                                    <span>124</span> <i class="fa fa-user-o"></i>
                                    <span class="badge badge-success p-2"><i class="fa fa-star"></i>4.6</span>
                                </div>
                            </div>
                            <div class="p-2 border-light bg-light border d-flex flex-row justify-content-between my-2">
                                <span>میدان ولی عصر</span>
                                <span>$$$</span>
                            </div>
                            <div class="mb-2">
                                <button type="button" class="btn btn-success btn-sm w-50 m-auto">نمایش منو</button>
                            </div>
                            <div class="card-footer">
                                <div class=" d-flex flex-row justify-content-between">
                                    <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                    <span>پیک رستوران</span>
                                    <span>120000 تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2">
                        <div class="card">
                            <div class="favorite-btn">
                                <i class="fas fa-heart fa-lg" ></i>
                            </div>
                            <div class="card-body">
                                <img src="img/shoplogo.jpg" alt="..." class="img-thumbnail">
                                <h5 class="card-title">شن</h5>
                                <small class="card-text">فست فور</small>
                                <div class="middle-line">
                                    <span>124</span> <i class="fa fa-user-o"></i>
                                    <span class="badge badge-success p-2"><i class="fa fa-star"></i>4.6</span>
                                </div>
                            </div>
                            <div class="p-2 border-light bg-light border d-flex flex-row justify-content-between my-2">
                                <span>میدان ولی عصر</span>
                                <span>$$$</span>
                            </div>
                            <div class="mb-2">
                                <button type="button" class="btn btn-success btn-sm w-50 m-auto">نمایش منو</button>
                            </div>
                            <div class="card-footer">
                                <div class=" d-flex flex-row justify-content-between">
                                    <i class="fa fa-motorcycle fa-flip-horizontal fa-2x"></i>
                                    <span>پیک رستوران</span>
                                    <span>120000 تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
