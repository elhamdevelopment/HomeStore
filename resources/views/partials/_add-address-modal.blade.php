<!-- Login Modal -->
<div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-gray-light">
            <div class="modal-header">
                <h5 class="modal-title"><i class="material-icons md-24">add_location</i> ثبت آدرس جدید</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div class="d-flex flex-row justify-content-between">
                        <div class="w-50 card">
                            <div class="card-body">
                                <form action="" class="">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="material-icons md-18">more</i></span>
                                            </div>
                                            <input type="text" name="cityName" id="cityName" class="form-control"
                                                   placeholder="نام شهر"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="material-icons">subtitles</i></span>
                                            </div>
                                            <input type="text" name="location" id="location" class="form-control"
                                                   placeholder="نام محله"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="material-icons">beenhere</i></span>
                                            </div>
                                            <input type="text" name="title" id="title" class="form-control"
                                                   placeholder="عنوان آدرس"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="material-icons md-18">my_location</i></span>
                                            </div>
                                            <input type="text" name="address" id="cityName" class="form-control"
                                                   placeholder="آدرس دقیق"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="loginRememberMe"
                                                   value="1">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">این آدرس پیش فرض باشد</span>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="p-2"></div>
                        <div class="w-50 card bg-dark">
                            <div class="card-body h-100 bg-dark text-white text-center">
<span>موقعیت خود را روی نقشه انتخاب نمایید.</span>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer d-flex justify-content-end">
                <button type="button" class="btn btn-accent btn-raised"><i
                            class="material-icons ml-1 bt-1">save</i>ثبت آدرس
                </button>
            </div>
        </div>
    </div>
</div>