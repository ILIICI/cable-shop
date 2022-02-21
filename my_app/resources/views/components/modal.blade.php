<!-- modal -->
<div class="modal fade" id="M{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ti-close" aria-hidden="true"></span>
                </button>
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                <img src="assets/img/quick-view/l1.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal2" role="tabpanel">
                                <img src="assets/img/quick-view/l2.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal3" role="tabpanel">
                                <img src="assets/img/quick-view/l3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        <a class="active" href="#modal1" data-toggle="tab">
                            <img src="assets/img/quick-view/s1.jpg" alt="">
                        </a>
                        <a href="#modal2" data-toggle="tab" role="tab">
                            <img src="assets/img/quick-view/s2.jpg" alt="">
                        </a>
                        <a href="#modal3" data-toggle="tab" role="tab">
                            <img src="assets/img/quick-view/s3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{ $title }}</h3>
                        <div class="product-price">
                            <span class="new">{{ $price }}</span>
                            <span class="old">$50.00</span>
                        </div>
                        <div class="product-rating">
                            <i class="icon-star theme-color"></i>
                            <i class="icon-star theme-color"></i>
                            <i class="icon-star theme-color"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                        </div>
                        <p>{{$description}}</p>
                        <div class="quickview-plus-minus">
                            <form action="{{ route('cart.store') }}" method="POST">

                                <div class="cart-plus-minus">
                                    <input type="text" name="qty" value="0" name="qtybutton" class="cart-plus-minus-box">
                                </div>

                                <div class="quickview-btn-cart">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $id }}" />
                                        <button type="submit" > ADD TO CART</button>
                                </div>
{{--
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="ti-heart"></i></a>
                                </div> --}}

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
