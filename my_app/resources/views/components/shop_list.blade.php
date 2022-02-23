<div class="shop-area pt-100 pb-100 gray-bg">
    <div class="container">
        <h3 class="page-title">{{ "Category" . " : " .Request::segment(2). " / " . Request::segment(3)}}</h3>
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="shop-topbar-wrapper">
                    <div class="product-sorting-wrapper">
                        <div class="product-show shorting-style">
                            <label>
                                <div class="p-2">
                                    <p class="small text-muted ">
                                        {!! __('Showing') !!}
                                        <span class="font-medium">{{ $product->firstItem() }}</span>
                                        {!! __('to') !!}
                                        <span class="font-medium">{{ $product->lastItem() }}</span>
                                        {!! __('of') !!}
                                        <span class="font-medium">{{ $product->total() }}</span>
                                        {!! __('results') !!}
                                    </p>
                                </div>
                            </label>
                            <select>
                                <option value="">12</option>
                                <option value="">24</option>
                                <option value="">36</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid-list-options">
                        <ul class="view-mode">
                            <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid4-alt"></i></a></li>
                            <li><a href="#product-list" data-view="product-list"><i class="ti-align-justify"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="grid-list-product-wrapper">
                    <div class="product-view product-grid">
                        <div class="row">
                            @foreach ($product as $item)
                                <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                    <div class="product-wrapper mb-10">
                                        <div class="product-img">
                                            <a href="{{ route('product.details',['slug' => $item->slug]) }}">
                                                <img src="{{ asset($item->images[1])}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                            </div>
                                            <div class="product-action-wishlist">
                                                <a title="Wishlist" href="#">
                                                    <i class="ti-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{ route('product.details',['slug' => $item->slug]) }}">{{ $item->product_name }}</a></h4>
                                            <div class="product-price">
                                                <span class="new">{{ $item->price }}</span>
                                             </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h4><a href="#">{{ $item->product_name }}</a></h4>
                                            <div class="product-price">
                                                <span class="new">{{ $item->price }}</span>
                                            </div>
                                            <p>{{ $item->description }}</p>
                                            <div class="product-list-action">
                                                <div class="product-list-action-left">
                                                    <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                                </div>
                                                <div class="product-list-action-right">
                                                    <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                    <a title="Quick View" href="{{ route('product.details',['slug' => $item->slug]) }}"><i class="ti-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination-style text-center mt-10">
                            {{ $product->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
