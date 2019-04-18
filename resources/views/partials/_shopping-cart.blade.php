<div class="modal fade zoom" id="shoppingCartModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
     aria-hidden="true">
    <div class="modal-dialog  modal-xl" role="document">
        <div class="modal-content bg-gray-light">
            <div class="modal-header">
                <h5 class="modal-title text-secondary"><i class="fas fa-shopping-cart ml-2"></i>فست فود رابو
                    <span class="badge badge-pill badge-primary">2</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('partials._shopping-cart-content')
            </div>
        </div>
    </div>
</div>