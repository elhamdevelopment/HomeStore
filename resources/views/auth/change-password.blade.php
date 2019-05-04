@php
    $template = getTemplate($role);
@endphp
@extends($template)

@section('content')
    <div class="row">
        <div class="col-6 m-auto">
            <div class="card o-hidden mb-4">
                <div class="card-header">
                    <i class="i-Password-shopping text-muted"></i> تغییر رمز عبور
                </div>
                <div class="card-body" ng-controller="profileController">
                    <form action="#"  id="changePasswordForm" novalidate>
                        <div class="form-group">
                            <input type="password" id="currentPassword" name="currentPassword" ng-model="currentPassword"   class="form-control"
                                   placeholder="رمز فعلی"
                                   data-rule-required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="newPassword" id="newPassword" ng-model="newPassword" data-rule-required="true" data-rule-minlength="6"
                                class="form-control" placeholder="رمز عبور جدید">

                        </div>
                        <div class="form-group">
                            <input type="password"  id="confirmPassword" ng-model="confirmPassword" name="confirmPassword" data-rule-equalto="#newPassword" data-rule-minlength="6"  data-rule-required="true"
                                   class="form-control" placeholder="تکرار رمز عبور">
                        </div>
                        <div class="form-group">
                            <button type="button" data- class="btn btn-primary btn-block" ng-click="changePassword()"><i
                                        class="fas fa-sign-in-alt ml-1" ></i>تغییر رمز عبور
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
