{{-- Register Modal--}}
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ثبت نام</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="#" id="registerForm">
                    <div class="form-group">
                        <input type="email" name="email" id="" class="form-control" placeholder="آدرس ایمیل"
                               data-rule-required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="first_name" id="firstName" class="form-control" placeholder="نام"
                               data-rule-required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" id="last_name" class="form-control"
                               placeholder="نام خانوادگی"
                               data-rule-required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="موبایل"
                               maxlength="11" data-rule-required data-rule-minlength="11" data-rule-digits="true">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="Password" data-rule-required="true"
                               data-rule-minlength="6"
                               class="form-control" placeholder="رمز عبور جدید">
                    </div>
                    <div class="form-group">
                        <input type="password" id="confirmPassword" name="password_confirmation" data-rule-equalto="#Password"
                               data-rule-minlength="6" data-rule-required="true"
                               class="form-control" placeholder="تکرار رمز عبور">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="registerForm"><i
                            class="fas fa-save ml-1"></i>ثبت نام
                </button>
            </div>
        </div>
    </div>
</div>