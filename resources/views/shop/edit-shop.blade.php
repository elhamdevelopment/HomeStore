@extends('layouts.shop')

@section('content')
    @include('partials._work-time-modal')
    <div class="breadcrumb d-flex flex-row justify-content-between">
        <h1><i class="i-Add md-48 ml-2"></i> ویرایش اطلاعات فروشگاه</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="d-flex justify-content-around row">
        <div class="col-12 col-md-8 col-lg-9">
            <div class="card">
                <div class="card-body">
                    <form action="" class="row">
                        <div class="col-12 col-md-6 shop-info">
                            <div class="form-group">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                       placeholder="نام رستوران">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                       placeholder="نام مدیر">
                            </div>
                            <div class="form-group">
                                <select class="custom-select" name="" id="">
                                    <option>نوع رستوران</option>
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="custom-select" name="" id="">
                                    <option>مناطق تحت پوشش</option>
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="custom-select" name="" id="">
                                    <option>سطح اقتصادی</option>
                                    <option>پایین</option>
                                    <option>متوسط</option>
                                    <option>بالا</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                       placeholder="حداقل سفارش">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                       placeholder="هزینه ارسال">
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                           از
                                        </span>
                                    </div>
                                    <input type="number" aria-label="Last name" placeholder="مثال 20 دقیقه"
                                           formaction="hh:mm" step="5" min="10" max="60" class="form-control text-center rtl">
                                    <div class="input-group-append">
                                        <span class="input-group-text">تا</span>
                                    </div>
                                    <input type="number" aria-label="Last name" step="5" min="20" max="120" placeholder="مثال 40 دقیقه "
                                           class="form-control text-center">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check ">
                                    <label class="d-inline-block align-top" for="">نوع پیک</label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" checked id="wallet"
                                               name="radio-address">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description"><i
                                                    class="fas fa-motorcycle ml-1"></i>پیک سایت

                                                </span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline ">
                                        <input type="radio" class="custom-control-input" id="online"
                                               name="radio-address">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description"><i class="i-Motorcycle ml-1"></i>پیک رستوران</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pr-sm-0 shop-contact">
                            <div class="form-group">
                                <select class="custom-select" name="" id="">
                                    <option>شهر را انتخاب نمایید..</option>
                                    <option>تهران</option>
                                    <option>شیراز</option>
                                    <option>مشهد</option>
                                    <option>تبریز</option>
                                    <option>اصفهان</option>
                                    <option>همدان</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                       placeholder="تلفن">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                       placeholder="موبایل">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="" id="" aria-describedby="helpId"
                                       placeholder="ایمیل">
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                <textarea placeholder="آدرس" class="form-control" name="" id=""
                                          rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                <textarea placeholder="توضیحات" class="form-control" name="" id=""
                                          rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-left">
                    <button type="button" class="btn btn-primary"><i class="i-Data-Save ml-2"></i> ثبت تغییرات</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3  pr-md-0 mt-3 mt-md-0">
            <div class="card card-profile-1">
                <div class="card-body text-center">

                    <div class="avatar box-shadow-2 my-3">
                        <img class="" src="/assets/images/products/watch-1.jpg" alt="">
                    </div>
                    <button type="button"
                            class="btn btn-white-border btn-raised btn-sm custom-file-upload" style="width: 50%">
                        <input type="file" multiple class="form-control">
                        <i class="fas fa-upload md-18 ml-2"></i> آپلود لوگو
                    </button>

                    <hr class="my-3">

                    <p  data-toggle="modal" data-target="#shopWorkTime" class="font-size-13 mb-2 pt-0" ><i class="fas fa-pen  pl-2" data-toggle="tooltip" title="ویرایش"></i> ساعت کاری</p>
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">روز هفته</th>
                            <th scope="col">ساعت</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>شنبه</td>
                            <td class="font-weight-bold text-secondary">از 8:00 تا 18:00</td>
                        </tr>
                        <tr>
                            <td>یک شنبه</td>
                            <td class="font-weight-bold text-secondary">از 8:00 تا 18:00</td>
                        </tr>
                        <tr>
                            <td>دوشنبه</td>
                            <td class="font-weight-bold text-secondary">از 8:00 تا 18:00</td>
                        </tr>
                        <tr>
                            <td>سه شنبه</td>
                            <td class="font-weight-bold text-secondary">از 8:00 تا 18:00</td>
                        </tr>
                        <tr>
                            <td>چهار شنبه</td>
                            <td class="font-weight-bold text-secondary">از 8:00 تا 18:00</td>
                        </tr>
                        <tr>
                            <td>پنج شنبه</td>
                            <td class="font-weight-bold text-secondary">از 8:00 تا 18:00</td>
                        </tr>
                        <tr>
                            <td>جمعه</td>
                            <td class="font-weight-bold text-secondary">از 8:00 تا 18:00</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
