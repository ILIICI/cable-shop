<div class="header-bottom transparent-bar">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
                <div class="logo pt-1 pb-1">
                    <a href="{{ route('home') }}"><img alt="" src="{{ asset('assets/img/logo/logo.png') }}"></a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                <div class="main-menu text-left">
                    <nav>
                        <ul>
                            @foreach ($items as $item)
                                @if ($item->subCategory->count() > 4)
                                    <li class="mega-menu-position"><a>{{ $item->navbar_item_title }}</a>
                                        <ul class="mega-menu">
                                            @foreach ($item->subCategory as $sub)
                                                <li><a
                                                        href="{{ route('category', ['product_cat' => $item->slug, 'product_sub_cat' => $sub->slug]) }}">{{ $sub->subcategory_item_title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                @elseif($item->subCategory->count() == 1)
                                    <li><a
                                            href="{{ route('category', ['product_cat' => $item->slug, 'product_sub_cat' => $sub->slug]) }}">{{ $item->navbar_item_title }}</a>
                                        <ul class="submenu">
                                            @foreach ($item->subCategory as $sub)
                                                <li><a
                                                        href="{{ route('category', ['product_cat' => $item->slug, 'product_sub_cat' => $sub->slug]) }}">{{ $sub->subcategory_item_title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li><a>{{ $item->navbar_item_title }}</a>
                                        <ul class="submenu">
                                            @foreach ($item->subCategory as $sub)
                                            <li><a
                                                href="{{ route('category', ['product_cat' => $item->slug, 'product_sub_cat' => $sub->slug]) }}">{{ $sub->subcategory_item_title }}</a>
                                        </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                    </nav>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-7">
                <div class="search-login-cart-wrapper">
                    <div class="header-search same-style">
                        <button class="search-toggle">
                            <i class="icon-magnifier s-open"></i>
                            <i class="ti-close s-close"></i>
                        </button>
                        <div class="search-content">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button>
                                    <i class="icon-magnifier"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="header-login same-style">
                        <a href="login-register.html"><i class="icon-user icons"></i></a>
                    </div>
                    @livewire('header-cart')
                </div>
            </div>
            <x-mobile_menu_area />
        </div>
    </div>
</div>
