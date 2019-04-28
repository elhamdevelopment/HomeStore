@extends('layouts.user')

@section('content')
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <select class="custom-select" name="" id="">
                                <option selected>زیر مجموعه..</option>
                                <option>پدر</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="نام دسته بندی">
                        </div>
                        <div class="form-group d-flex flex-row justify-content-center">
                            <label class="d-flex flex-grow-1 custom-file">
                                <input type="file" name="" id="" placeholder="" class="custom-file-input"
                                       aria-describedby="fileHelpId">
                                <span class="custom-file-control">
    <button type="button"
            class="btn btn-white-border btn-block btn-raised custom-file-upload">
    <i class="fas fa-upload md-24 ml-2"></i> آپلود تصویر دسته بندی
    </button>
    </span>
                            </label>
                            <div class="d-flex align-items-center"><i class="fas fa-hamburger font-size-13 ml-2"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="custom-select" name="" id="">
                                <option selected>نوع فرشگاه...</option>
                                <option value="">رستوران</option>
                                <option value="">سوپر مارکت</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="توضیحات" name="" id="" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="" value="checkedValue" checked
                                       class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">فعال</span>
                            </label>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-left">
                    <button type="button" class="btn btn-primary"><i class="i-Data-Save ml-2"></i> ثبت دسته بندی
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 mt-3 mt-md-0">
            <div class="card o-hidden mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">

                    <h3 class="w-50 float-left card-title m-0"><i class="i-Folder-Organizing"></i> لیست دسته بندی</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-hover table-striped">
                        <div id="category-list"
                             class="dataTables_wrapper container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="sales_table"
                                           class="table dataTable-collapse text-center  no-footer table-borderless"
                                           role="grid"
                                           aria-describedby="sales_table_info">
                                        <thead class="hear">
                                        <tr role="row">
                                            <th scope="col" class="sorting_asc" tabindex="0" aria-controls="sales_table"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="#: فعال کردن برای مرتب کردن ستون نزولی" style="width: 9px;">
                                                ردیف
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="sales_table"
                                                rowspan="1" colspan="1"
                                                aria-label="قیمت: فعال کردن ستون صعودی را مرتب کنید"
                                                style="width: 38px;">آیکن
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="sales_table"
                                                rowspan="1" colspan="1"
                                                aria-label="محصول: فعال کردن ستون صعودی را مرتب کنید"
                                                style="width: 46px;">زیر مجموعه
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="sales_table"
                                                rowspan="1" colspan="1"
                                                aria-label="محصول: فعال کردن ستون صعودی را مرتب کنید"
                                                style="width: 46px;">نوع فروشگاه
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="sales_table"
                                                rowspan="1" colspan="1"
                                                aria-label="محصول: فعال کردن ستون صعودی را مرتب کنید"
                                                style="width: 46px;"> دسته بندی
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="sales_table"
                                                rowspan="1" colspan="1"
                                                aria-label="وضعیت: فعال کردن ستون صعودی را مرتب کنید"
                                                style="width: 64px;">وضعیت
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr role="row" class="odd">
                                            <th scope="row" class="sorting_1">1</th>
                                            <td><i class="i-Add-Cart"></i></td>
                                            <td>
                                                ریشه
                                            </td>

                                            <td>رستوران</td>
                                            <td><span class="">غذاهای یونانی</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <th scope="row" class="sorting_1">1</th>
                                            <td><i class="i-Add-Cart"></i></td>
                                            <td>
                                                ریشه
                                            </td>

                                            <td>رستوران</td>
                                            <td><span class="">غذاهای یونانی</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <th scope="row" class="sorting_1">1</th>
                                            <td><i class="i-Add-Cart"></i></td>
                                            <td>
                                                ریشه
                                            </td>

                                            <td>رستوران</td>
                                            <td><span class="">غذاهای یونانی</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <th scope="row" class="sorting_1">1</th>
                                            <td><i class="i-Add-Cart"></i></td>
                                            <td>
                                                ریشه
                                            </td>

                                            <td>رستوران</td>
                                            <td><span class="">غذاهای یونانی</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <th scope="row" class="sorting_1">1</th>
                                            <td><i class="i-Add-Cart"></i></td>
                                            <td>
                                                ریشه
                                            </td>

                                            <td>رستوران</td>
                                            <td><span class="">غذاهای ایرانی</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div ng-controller="countryController">
        {{--<div class="row" dir="ltr">--}}
            {{--<div class="col-6">--}}
                {{--<adm-dtp ng-required="true" ng-model='ToDate'--}}
                         {{--options='{calType: "jalali", format: "YYYY/MM/DD",zIndex:999}'></adm-dtp>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<adm-dtp ng-required="true" ng-model='ToDate'--}}
                 {{--options='{calType: "jalali", format: "YYYY/MM/DD",zIndex:999}'></adm-dtp>--}}
        {{--<toaster-container--}}
                {{--toaster-options="{'time-out': 5000,'position-class': 'toast-top-right','close-button': true,'progressbar': true}"></toaster-container>--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-7">--}}
                {{--<div class="box box-primary">--}}
                    {{--<div class="box-header with-border">--}}
                        {{--<i class="fa fa-list"></i>--}}
                        {{--<h3 class="box-title" style="margin-right:5px;">لیست کشور ها </h3>--}}

                        {{--<div class="box-tools pull-right">--}}
                            {{--<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"--}}
                                    {{--title="" data-original-title="Collapse">--}}
                                {{--<i class="fa fa-minus"></i>--}}
                            {{--</button>--}}
                            {{--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"--}}
                                    {{--title="" data-original-title="Remove">--}}
                                {{--<i class="fa fa-times"></i>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="box-body">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6 center-block" style="float:none">--}}
                                {{--<div class="input-group">--}}
                                    {{--<input type="text" ng-model="search" class="form-control" placeholder="جستجوی...">--}}
                                    {{--<span class="input-group-btn">--}}
    {{--<button class="btn btn-default" type="button">--}}
    {{--جستجو <span class="fa fa-search"></span>--}}
    {{--</button>--}}
    {{--</span>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row" style="margin-top:20px">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<table id="countryGrid" cellspacing="0" border="0" align="right"--}}
                                       {{--class="table table-striped table-hover table-bordered table-condensed">--}}
                                    {{--<thead class="GridHeader">--}}
                                    {{--<tr style="height: 20px;">--}}
                                        {{--<th class="text-center">ردیف</th>--}}
                                        {{--<th ng-click="sort('CountryNameFa')" class="text-center">نام فارسی <span--}}
                                                    {{--class="glyphicon sort-icon" ng-show="sortKey=='countryNameFa'"--}}
                                                    {{--ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>--}}
                                        {{--</th>--}}
                                        {{--<th ng-click="sort('CountryNameEn')" class="text-center">نام لاتین<span--}}
                                                    {{--class="glyphicon sort-icon" ng-show="sortKey=='countryNameEn'"--}}
                                                    {{--ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>--}}
                                        {{--</th>--}}
                                        {{--<th class="text-center"></th>--}}
                                        {{--<th class="text-center"></th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody id="viewCountry">--}}
                                    {{--<tr dir-paginate="country in countries |orderBy:sortKey:reverse| filter:search | itemsPerPage: 2"--}}
                                        {{--pagination-id="countryGridPaging">--}}
                                        {{--<td class="text-center">@{{ countries.indexOf(country) + 1}}</td>--}}
                                        {{--<td class="text-center"><input type="text" ng-readonly="!isEdit"--}}
                                                                       {{--ng-class="{'form-control':isEdit,'labelinput':!isEdit}"--}}
                                                                       {{--ng-model="country.CountryName"/></td>--}}
                                        {{--<td class="text-center"><input type="text" ng-readonly="!isEdit"--}}
                                                                       {{--ng-class="{'form-control':isEdit,'labelinput':!isEdit}"--}}
                                                                       {{--ng-model="country.CountryName"/></td>--}}
                                        {{--<td class="text-center">--}}
                                            {{--<i ng-show="!isEdit" class="fa fa-edit fa-lg iconbtn"--}}
                                               {{--ng-click="isEdit=true"></i>--}}
                                            {{--<div ng-show="isEdit" ng-hide="!isEdit">--}}
                                                {{--<i aria-hidden="true" style="color:red;margin-left:10px;"--}}
                                                   {{--class="fa fa-remove fa-lg iconbtn" ng-click="isEdit=false"></i>--}}
                                                {{--<i aria-hidden="true" ng-click="editCountry()" style="color:green"--}}
                                                   {{--class="fa fa-check fa-lg iconbtn"></i>--}}
                                            {{--</div>--}}
                                        {{--</td>--}}
                                        {{--<td class="text-center"><i class="fa fa-trash fa-lg iconbtn"--}}
                                                                   {{--ng-click="DeleteCountry(categories.indexOf(country),country.id)"></i>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                {{--</table>--}}

                                {{--<div style="margin:auto">--}}
                                    {{--<dir-pagination-controls pagination-id="countryGridPaging"--}}
                                                             {{--max-size="2"--}}
                                                             {{--direction-links="true"--}}
                                                             {{--boundary-links="true">--}}
                                    {{--</dir-pagination-controls>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>

@endsection