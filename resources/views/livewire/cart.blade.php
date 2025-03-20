<div class="block-cart dropdown">
    <div class="cart-title">
        <i class="fa fa-shopping-basket"></i>
        <span class="cart-count">{{$nbr}}</span>
    </div>
    <div class="dropdown-content">
        <div class="cart-content">
            @php
                $cartItems=App\Services\CartService::getContent();
            @endphp
            <table>
                <tbody>
                    @if(App\Services\CartService::isEmpty()==true)
                    @foreach ($cartItems as $key => $value)
                    <tr>
                        <td class="product-image">
                            <a href="product-detail-left-sidebar.html">
                                <img src="{{asset('storage/'.$value['image'])}}" alt="Product">
                            </a>
                        </td>
                        <td>
                            <div class="product-name">
                                <a href="product-detail-left-sidebar.html">{{$value['name']}}</a>
                            </div>
                            <div class="text-danger">
                                {{$value['quantity']}} x <span class="product-price">{{$value['price']}} DH</span>
                            </div>
                        </td>
                       
                        <td class="action">
                            <a class="remove" href="#"  wire:click.prevent="remove_from_cart({{$value['id']}})">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                    <tr class="total" >
                        <td>Total:</td>
                        <td colspan="2">{{App\Services\CartService::getTotalPrice()}} DH</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="cart-button">
                                <a class="btn btn-primary" href="{{route('cart.show_cart')}}" title="View Cart">Panier</a>
                                <a class="btn btn-primary" href="product-checkout.html" title="Checkout">Checkout</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>