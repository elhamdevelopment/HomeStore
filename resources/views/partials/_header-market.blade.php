{{--header--}}
<header class="container-fluid no-gutters py-2 bg-white">
        <div class="d-flex justify-content-between">
            <div class="col-3">
                <div class="btn-group" role="group">
                    <a href="/" class="btn btn-white-border "><i class="fas fa-utensils ml-1"></i><span class="d-none d-md-inline-block" title="رستوران" data-toggle="tooltip">رستوران</span></a>
                    <a href="/market" class="btn btn-primary btn-raised"><i class="fas fa-store-alt mr-1"></i><span class="d-none d-md-inline-block" title="سوپر مارکت">سوپر مارکت</span>
                    </a>
                </div>
                <button id="changeBranchBtn" class="btn btn-outline-primary btn-raised mr-2" data-toggle="modal" data-target="#">
                    <i class="material-icons text-primary pl-md-1">my_location</i><span class="d-none d-md-inline-block">تهران</span>
                </button>
            </div>
            <div class="col-5">
                <form action="" class="w-100">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="SearchLocation"
                               placeholder="جستجو کالا..">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary"><i
                                        class="fa fa-search ml-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-3">
                <button id="shoppingCartBtn" class="btn btn-outline-primary btn-raised mr-2" data-toggle="modal" data-target="#shoppingCartModal">
                    <i class="material-icons text-primary pl-md-1">shopping_cart</i><span class="d-none d-md-inline-block">سبد خرید</span>
                </button>
                <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#modelId"><i
                            class="fas fa-user-circle ml-md-1"></i><span class="d-none d-md-inline-block">ورود</span>
                </button>
                <button type="button" class="btn btn-secondary mr-1" data-target="#registerModal"
                        data-toggle="modal"><span class="d-none d-md-inline-block">ثبت نام</span>
                     <i class="fa fa-registered ml-md-1"></i>
                </button>
            </div>
        </div>
</header>