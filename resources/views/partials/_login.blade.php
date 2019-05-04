<!-- Login Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="far fa-user-circle fa-2x ml-2"></i>ورود</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="#" class="" id="loginForm">
                    <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control"
                                   placeholder="آدرس ایمیل یا موبایل"
                                   required>
                        {{--<small id="helpId" class="text-muted">Help text</small>--}}
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="رمز عبور"
                               required
                               aria-describedby="helpId">
                        {{--<small id="helpId" class="text-muted">Help text</small>--}}
                    </div>
                    <div class="form-check">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="remember" value="1">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">مرا به خاطر بسپار</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button id="btnLogin" type="submit" class="btn btn-primary btn-block"><i
                                    class="fas fa-sign-in-alt ml-1"></i>ورود
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <div class="w-100">شما می توانید از طریق حساب گوگل خود وارد شوید.</div>
                <button type="button" class="btn btn-outline-danger" style="width: 50%"><i
                            class="fab fa-google ml-1"></i>ورود با اکانت گوگل
                </button>
            </div>
        </div>
    </div>
</div>