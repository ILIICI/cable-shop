<!-- modal -->
<div class="modal fade" id="M{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close d-flex flex-row-reverse m-3" data-dismiss="modal" aria-label="Close">
                <span class="ti-close" aria-hidden="true"></span>
            </button>
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                <img src="{{ $images }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{ $title }}</h3>
                        <div class="product-price">
                            <span class="new">
                                <h4 class="text-danger">{{ $price }} £</h4>
                            </span>
                        </div>
                        <p>{!! html_entity_decode($shortdesc) !!}</p>
                        <p>{!! html_entity_decode($techdesc) !!}</p>
                        <div class="quickview-plus-minus">
                            <form action="{{ route('cart.store') }}" method="POST">
                                <div class="cart-plus-minus">
                                    <input type="text" name="qty" value="0" name="qtybutton"
                                        class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $id }}" />
                                    <button type="submit"> ADD TO CART</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
