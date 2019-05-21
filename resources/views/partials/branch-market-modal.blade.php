<!-- address Modal -->
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
                                <form id="userAddressForm" action="" class="">
                                    <input type="hidden" name="id" ng-model="address.id">
                                    <input type="hidden" name="lat" ng-model="address.lat">
                                    <input type="hidden" name="lang" ng-model="address.lang">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="material-icons md-18">more</i></span>
                                            </div>
                                            <input ng-model="address.city" type="text" name="city" id="cityName" class="form-control"
                                                   placeholder="نام شهر"
                                                   data-rule-required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="material-icons">subtitles</i></span>
                                            </div>
                                            <input type="text" ng-model="address.location" name="location" id="location" class="form-control"
                                                   placeholder="نام محله"
                                                   data-rule-required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="material-icons">beenhere</i></span>
                                            </div>
                                            <input ng-model="address.title" type="text" name="title" id="title" class="form-control"
                                                   placeholder="عنوان آدرس"
                                                   data-rule-required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                        class="material-icons md-18">my_location</i></span>
                                            </div>
                                            <input type="text" ng-model="address.address" name="address" id="address" class="form-control"
                                                   placeholder="آدرس دقیق"
                                                   data-rule-required>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-checkbox" ng-init="address.is_default=false">
                                            <input type="checkbox" class="custom-control-input" ng-model="address.is_default" name="isDefault"
                                                   ng-check="address.is_default">
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
                <button  ng-click="addOrUpdateAddress(address)" type="button" class="btn btn-accent btn-raised"><i
                            class="material-icons ml-1 bt-1">save</i>ثبت آدرس
                </button>
            </div>
        </div>
    </div>
</div>