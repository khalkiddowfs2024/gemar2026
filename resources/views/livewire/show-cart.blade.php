<div class="page-cart">
    <div class="table-responsive">
        @php
        $cartItems=App\Services\CartService::getContent();
        @endphp
        <table class="cart-summary table table-bordered">
            <thead>
                <tr>
                    <th class="width-20">&nbsp;</th>
                    <th class="width-80 text-center">
                        Image
                    </th>
                    <th>Designation</th>
                    <th class="width-100 text-center">
                        Prix Unitaire
                    </th>
                    <th class="width-100 text-center">
                        Qty
                    </th>
                    <th class="width-100 text-center">
                        Total
                    </th>
                </tr>
            </thead>

            <tbody>
                @if($cartItems !== NULL && count($cartItems)> 0)
                @foreach ($cartItems as $key => $value)
                <tr>
                    <td class="product-remove">
                        <a
                            title="Remove this item"
                            class="remove"
                            href="#">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>
                    <td>
                        <a
                            href="product-detail-left-sidebar.html">
                            <img
                                width="80"
                                alt="Product Image"
                                class="img-responsive"
                                src="/storage/{{$value['image']}}" />
                        </a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$value['name']}}</a>
                    </td>
                    <td class="text-center">{{number_format($value['price'],2,',')}}</td>
                    <td>
                        <div class="product-quantity">
                            <div class="qty">
                                <div class="input-group">
                                    <input type="text" name="qty" value="{{number_format($value['quantity'],2,',')}}" data-min="1" />
                                    <span class="adjust-qty">
                                        <span class="adjust-btn plus" wire:click="increment(999)">+</span>
                                        <span class="adjust-btn minus" wire:click="decrement">-</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">{{number_format($value['price']*$value['quantity'],2,',')}}</td>
                </tr>
            </tbody>
            @endforeach
            @endif

            <tfoot>
                <tr class="cart-total">
                    <td rowspan="3" colspan="3"></td>
                    <td colspan="2" class="text-right">
                        Total products
                    </td>
                    <td colspan="1" class="text-center">
                        {{number_format(App\Services\CartService::getTotalPrice(),2,',')}} DH
                    </td>
                </tr>
                <tr class="cart-total">
                    <td colspan="2" class="text-right">
                        Frais de livraison
                    </td>
                    <td colspan="1" class="text-center">
                        0,00 DH
                    </td>
                </tr>
                <tr class="cart-total">
                    <td
                        colspan="2"
                        class="total text-right">
                        Total
                    </td>
                    <td
                        colspan="1"
                        class="total text-center">
                        {{number_format(App\Services\CartService::getTotalPrice(),2,',')}} DH
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="checkout-btn">
        <a
            href="product-checkout.html"
            class="btn btn-primary pull-right"
            title="Proceed to checkout">
            <span>Proceed to checkout</span>
            <i class="fa fa-angle-right ml-xs"></i>
        </a>
    </div>
</div>