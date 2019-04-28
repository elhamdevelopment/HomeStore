@extends('layouts.user')

@section('content')
    @include('partials._add-address-modal')
    <div class="row">

        <div class="col-10 m-auto">
            <div class="card o-hidden mb-4">
                <div class="card-header  d-flex justify-content-start">
                    <i class="i-Address-Book text-muted ml-2"></i>آدرس های من
                    <button type="button" class="btn btn-white-border btn-raised mr-auto" data-toggle="modal" data-target="#addressModal">
                        <i class="fas fa-plus ml-2"></i> ثبت آدرس جدید
                    </button>
                </div>
                <div class="card-body text-center">
                    <div class="d-flex flex-row justify-content-start">
                        <span class="font-weight-bold h5 text-secondary">خانه</span>
                        <p class="ml-auto m-0 pr-2"><strong>آدرس: </strong>تهران خیابان جمهوری کوچه 12</p>
                        <i class="fas fa-trash ml-2"></i>
                        <i class="fas fa-edit"></i>
                    </div>
                    <hr class="my-3">
                    <div class="d-flex flex-row justify-content-start">
                        <span class="font-weight-bold h5">خانه</span>
                        <p class="ml-auto m-0 pr-2"><strong>آدرس: </strong>تهران خیابان جمهوری کوچه 12</p>
                        <i class="fas fa-trash ml-2"></i>
                        <i class="fas fa-edit"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
