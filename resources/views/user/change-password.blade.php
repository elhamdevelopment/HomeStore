@extends('layouts.user')

@section('content')
    <div class="row">
        <!-- ICON BG -->
        <div class="col-6 m-auto">
            <div class="card o-hidden mb-4">
                <div class="card-header">
                    <i class="i-Password-shopping text-muted"></i> تغییر رمز عبور
                </div>
                <div class="card-body text-center">
                    <form action="" class="">
                        <div class="form-group">
                            <input type="password" name="password" id="userName" class="form-control"
                                   placeholder="رمز فعلی"
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="" id="" class="form-control" placeholder="رمز عبور جدید" required
                                   aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <input type="password" name="" id="" class="form-control" placeholder="تکرار رمز عبور" required
                                   aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block"><i
                                        class="fas fa-sign-in-alt ml-1"></i>تغییر رمز عبور
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
