<div>
    <div class="breadcrumb-area pt-95 pb-95 bg-img"
        style="background-image:url({{ asset('assets/img/banner/banner-2.jpg') }});">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Product Details</h2>
                <ul>
                    <li>{{ $title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-img">
                        <img id="zoompro" src="{{ asset($images[3]) }}" data-zoom-image="{{ asset($images[4]) }}"
                            alt="zoom" />
                        <div id="gallery" class="mt-12 product-dec-slider owl-carousel">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content">
                        <h1>{{ $title }}</h1>
                        <div class="product-price">
                            <span class="new">
                                <h2 class="text-danger">Price : {{ $price }} £</h2>
                            </span>
                        </div>
                        <p>
                        <h4>{!! html_entity_decode($techdesc) !!}</h4>
                        </p>
                        <div class="in-stock">
                            <span><i class="ion-android-checkbox-outline"></i> In Stock : Quantity
                                {{ $instock }}</span>
                        </div>
                        <div class="sku">
                            <span>SKU#: {{ $sncode }}</span>
                        </div>
                        <p>{{ $description }}</p>
                        <form class="d-flex" action="{{ route('cart.store') }}" method="POST">
                            <div class="quality-wrapper mt-30 product-quantity">
                                <label>Qty:</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qty" value="1">
                                </div>
                            </div>
                            <div class="product-list-action">
                                <div class="product-list-action-left">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $id }}" />
                                    <button class="ml-3 btn-success" type="submit">ADD TO CART</button>
                                </div>
                            </div>
                        </form>
                        <div class="social-icon mt-30">
                            <ul>
                                <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-social-instagram"></i></a></li>
                                <li><a href="#"><i class="icon-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-social-skype"></i></a></li>
                                <li><a href="#"><i class="icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-area pb-100">
        <div class="container">
            <div class="description-review-wrapper gray-bg pt-40">
                <div class="description-review-topbar nav text-center">
                    <a class="active" data-toggle="tab" href="#des-details1">DESCRIPTION</a>
                    <a data-toggle="tab" href="#des-details2">TECHNICAL SPECIFICATION</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            <p>{!! html_entity_decode($longdesc) !!}</p>
                        </div>
                    </div>
                    <div id="des-details2" class="tab-pane">
                        <div class="product-anotherinfo-wrapper">
                            <p>{!! html_entity_decode($techdesc) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
