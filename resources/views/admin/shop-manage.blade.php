@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive ">
                    <table id="productList" role="grid"
                           class="table-hover table-striped table text-center table-bordered table-borderless rounded">
                        <thead>
                        <tr role="row">
                            <th scope="col" style="width: 9px;">
                                ردیف
                            </th>
                            <th scope="col"
                                style="width: 38px;">تصویر
                            </th>
                            <th scope="col"
                                style="width: 38px;">نام محصول
                            </th>
                            <th scope="col"
                                style="width: 38px;">قیمت
                            </th>
                            <th scope="col"
                                style="width: 38px;">موجود
                            </th>
                            <th scope="col"
                                style="width: 38px;">فعال
                            </th>
                            <th scope="col"
                                style="width: 38px;">عملیات
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
                                    <i class="fas fa-trash ml-2"></i>
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
@endsection