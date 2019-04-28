@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive ">
                    <table id="productList" role="grid"
                           class=" table-striped table-hover table text-center table-bordered table-borderless  rounded">
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
                        <tbody class="">
                        <tr role="row" class="align-middle">
                            <th scope="row" style="width: 30px">2</th>
                            <td><img src="/img/food2.jpg" alt="" class="rounded img-round-size-1" style="width: 80px">
                            </td>
                            <td>
                                پیتزا گوشت و قارچ
                            </td>

                            <td>{{number_format(120000)}} تومان</td>
                            <td><i class="material-icons md-24 text-success">check</i></td>
                            <td><i class="material-icons  md-24 text-gray-light">visibility_off</i></td>
                            <td>
                                <a href="#" class="text-gray-light">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="text-gray-light mr-3">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr role="row" class="align-middle">
                            <th scope="row" class="sorting_1">1</th>
                            <td><img src="/img/food2.jpg" alt="" class="rounded img-round-size-1" style="width: 80px">
                            </td>
                            <td>
                                پیتزا گوشت و قارچ
                            </td>

                            <td>{{number_format(120000)}} تومان</td>
                            <td><i class="material-icons md-24 text-success">check</i></td>
                            <td><i class="material-icons  md-24 text-secondary">visibility</i></td>
                            <td>
                                <a href="#" class="text-gray-light">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="text-gray-light mr-3">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr role="row" class="align-middle">
                            <th scope="row" class="sorting_1">1</th>
                            <td><img src="/img/food2.jpg" alt="" class="rounded img-round-size-1" style="width: 80px">
                            </td>
                            <td>
                                پیتزا گوشت و قارچ
                            </td>

                            <td>{{number_format(120000)}} تومان</td>
                            <td><i class="material-icons md-24 text-success">check</i></td>
                            <td><i class="material-icons  md-24 text-gray-light">visibility_off</i></td>
                            <td>
                                <a href="#" class="text-gray-light">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="text-gray-light mr-3">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr role="row" class="align-middle">
                            <th scope="row" class="sorting_1">1</th>
                            <td><img src="/img/food2.jpg" alt="" class="rounded img-round-size-1" style="width: 80px">
                            </td>
                            <td>
                                پیتزا گوشت و قارچ
                            </td>

                            <td>{{number_format(120000)}} تومان</td>
                            <td><i class="material-icons md-24 text-danger">clear</i></td>
                            <td><i class="material-icons  md-24 text-gray-light">visibility_off</i></td>
                            <td>
                                <a href="#" class="text-gray-light">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="text-gray-light mr-3">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr role="row" class="align-middle">
                            <th scope="row" class="sorting_1">1</th>
                            <td><img src="/img/food2.jpg" alt="" class="rounded img-round-size-1" style="width: 80px">
                            </td>
                            <td>
                                پیتزا گوشت و قارچ
                            </td>

                            <td>{{number_format(120000)}} تومان</td>
                            <td><i class="material-icons md-24 text-danger">clear</i></td>
                            <td><i class="material-icons  md-24 text-secondary">visibility</i></td>
                            <td>
                                <a href="#" class="text-gray-light">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="text-gray-light mr-3">
                                    <i class="fas fa-trash"></i>
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