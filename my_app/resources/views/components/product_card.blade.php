<div class="product-area pt-15 pb-70 gray-bg">
    <div class="container">
        <div class="section-title text-center">
            <h4>Most Popular Products</h4>
        </div>
        <div class="row">
            @foreach ($parameters as $parameter)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrapper mb-10 border border-secondary rounded">
                        <div class="product-img">
                            <a href="{{ route('product.details', ['slug' => $parameter->slug]) }}">
                                <img src="{{ asset($parameter->images[0]) }}" alt="{{ $parameter->product_name }}">
                            </a>
                            <div class="product-action">
                                <a title="Quick View" data-toggle="modal"
                                    data-target="#M{{ $parameter->product_uuid }}">
                                    <i class="ti-plus"></i>
                                </a>
                                <form title="Add To Cart" action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $parameter->product_uuid }}" />
                                    <button type="submit" class="ti-shopping-cart"></button>
                                </form>
                            </div>
                            <div class="product-action-wishlist">
                                <a title="Wishlist" href="#">
                                    <i class="ti-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a
                                    href="{{ route('product.details', ['slug' => $parameter->slug]) }}">{{ $parameter->product_name }}</a>
                            </h4>
                            <div class="product-price">
                                <span class="new">{{ $parameter->price }}</span>
                                <span class="old">$50.00</span>
                            </div>

                        </div>
                    </div>
                </div>
                <x-modal id="{{ $parameter->product_uuid }}" title="{{ $parameter->product_name }}"
                    price="{{ $parameter->price }}" description="{{ $parameter->description }}"
                    images="{{ $parameter->images[2] }}" shortdesc="{{ $parameter->short_description }}"
                    techdesc="{{ $parameter->tech_description }}" />
            @endforeach
            <div class="pagination-style text-center">
                {{ $parameters->links() }}
            </div>
        </div>
    </div>
</div>
