<div class="header-cart same-style">
    <button class="icon-cart">
        <i class="icon-handbag"></i>
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

                        <a wire:click="increase('{{ $item->id }}')"><i
                                class="mx-1 ti-plus"></i></a>
                        <a wire:click="decrease('{{ $item->id }}')"><i
                                class="mx-1 ti-minus"></i></a>
                        <a wire:click="deleteFromCart('{{ $item->id }}')"><i
                                class="mx-1 ti-trash"></i></a>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="shopping-cart-total">
            <h4>Shipping : <span>Free</span></h4>
            <h4>Total : <span class="shop-total">{{ $sum }}</span></h4>
        </div>
        <div class="shopping-cart-btn">

            <a href="{{ route('checkout') }}">checkout</a>
        </div>
    </div>
</div>
