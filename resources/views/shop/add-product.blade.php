@extends('layouts.shop')

@section('content')
    <div class="breadcrumb d-flex flex-row justify-content-between">
        <h1><i class="i-Add md-48 ml-2"></i> ثبت محصول جدید</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-12 col-md-7 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option>دسته بندی محصول</option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                   placeholder="نام محصول یا غذا">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                   placeholder="قیمت محصول">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                   placeholder="نام برند">
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked name="loginRememberMe"
                                           value="1">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">موجود</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="switch switch-primary">
                                <span>فعال</span>
                                <input type="checkbox" checked="checked">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="شرایط گارانتی" class="form-control" name="" id=""
                                      rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <textarea placeholder="توضیحات محصول" class="form-control" name="" id=""
                                          rows="4"></textarea>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="card-footer text-left">
                    <button type="button" class="btn btn-primary"><i class="i-Data-Save ml-2"></i> ثبت محصول</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-4">
            <div class="card mt-3 mt-md-0">
                <div class="card-body text-center">
                    <form action="">
                        <div class="form-group">
                            <button type="button" class="btn btn-white-border btn-raised btn-block custom-file-upload">
                                <input type="file" multiple class="form-control">
                                <i class="i-Upload md-48 ml-2"></i> آپلود تصویر محصول
                            </button>
                            <div class="progress my-2" style="height: 15px;direction: ltr">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-6">
                            <img class="rounded border border-gray-200" src="/assets/images/products/watch-1.jpg" alt="">

                        </div>
                        <div class="col-6">
                            <img class="rounded border border-gray-200" src="/assets/images/products/iphone-1.jpg" alt="">

                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <img class="rounded border border-gray-200" src="/assets/images/products/headphone-4.jpg" alt="">

                        </div>
                        <div class="col-6">
                            <img class="rounded border border-gray-200" src="/assets/images/products/headphone-1.jpg" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
