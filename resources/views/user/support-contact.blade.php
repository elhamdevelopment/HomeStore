@extends('layouts.user')

@section('content')
    <div class="row" ng-controller="supportController">
        <div class="col-6">
            <div class="card o-hidden mb-4">
                <div class="card-header">
                    <i class="i-Support text-muted pl-2"></i>فرم تماس با پشتیبانی
                </div>
                <div class="card-body">
                    <form action="#" novalidate id="contactForm">
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" class="form-control"
                                   placeholder="موضوع"
                                   required ng-model="subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="متن پیام" name="description" id="description"
                                      cols="30" rows="10" required ng-model="description"></textarea>
                        </div>
                        <div class="form-group text-left">
                            <button type="button" class="btn btn-primary" ng-click="addSupport(subject,description)"><i
                                        class="i-Mail-Send ml-1"></i>ارسال
                                پیام
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card o-hidden mb-4">
                <div class="card-header">
                    <i class="i-Address-Book pl-2 text-muted"></i>اطلاعات تماس
                </div>
                <div class="card-body text-center">
                    <p>آدرس: تهران خیابان سعادت آباد کوچه 7 ساختمان ..</p>
                    <p>شماره تماس 09123365859</p>
                    <p>شماره تماس پشتیبانی 0217895463</p>
                    <p class="text-purple">آدرس ایمیل: support@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
@endsection
