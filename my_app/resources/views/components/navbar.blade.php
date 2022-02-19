{{-- <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.png" alt="" width="auto" height="38">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($brands as $brand)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $brand->brand_name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($models as $model)
                                @if ($brand->id == $model->smartphone_id)
                                    <li><a class="dropdown-item"
                                            href="{{ url('charger/' . $model->slug) }}">{{ $model->model_name }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
            <form action="{{ route('search') }}" class="d-flex" method="GET" name="query" role="search">
                <input class="form-control me-2" pattern=".{3,20}" name="query" type="search"
                    placeholder="Search (min 3 characters)" aria-label="Search" required>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="header-cart same-style">
                <button class="icon-cart">
                    <span class="shop-bag"><i class='bx bxs-shopping-bag'></i></span>
                    <span class="count-style">{{ Cart::session(Session::getId())->getTotalQuantity() }}</span>
                </button>
                <div class="shopping-cart-content">
                    <ul>
                        @foreach ($cart as $item)
                            <li class="single-shopping-cart">
                                <div class="shopping-cart-title">
                                    <h4><a href="#">{{ $item->name }}</a></h4>
                                    <h6>Quantity : {{ $item->quantity }}</h6>
                                    <h6>Price per unit : {{ $item->price }}</h6>
                                </div>
                                <div class="shopping-cart-icon">
                                    <a href="{{ route('cart.increase', $item->id) }}">
                                        <i class="mx-1 fa-solid fa-circle-plus fa-lg"></i>
                                    </a>
                                    <a href="{{ route('cart.decrease', $item->id) }}">
                                        <i class="mx-1 fa-solid fa-circle-minus fa-lg"></i>
                                    </a>
                                    <a href="{{ route('cart.remove', $item->id) }}">
                                        <i class="mx-1 fa-solid fa-trash-can fa-lg"></i>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="shopping-cart-total">
                        <h4>Shipping : <span>Free</span></h4>
                        <h4>Total : <span class="shop-total">{{ $sum }}</span></h4>
                    </div>
                    <div class="shopping-cart-btn">
                        <a href="">view cart</a>
                        <a href="">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
 --}}
