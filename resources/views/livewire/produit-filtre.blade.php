<div class="tab-pane active" id="products-grid">
    <div class="products-block">
        <div class="row">
            @foreach ($produits as $produit)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item">
                        <div class="product-image">
                            <a href="product-detail-left-sidebar.html">
                                <img class="img-responsive" src="{{'storage/'.$produit->image}}" alt="Product Image">
                            </a>
                        </div>

                        <div class="product-title">
                            <a href="product-detail-left-sidebar.html">
                                {{$produit->designation}}
                            </a>
                        </div>

                        <div class="product-rating">
                            <div class="star on"></div>
                            <div class="star on"></div>
                            <div class="star on "></div>
                            <div class="star on"></div>
                            <div class="star"></div>
                        </div>

                        <div class="product-price">
                            <span class="sale-price">{{number_format($produit->prix_ht,2,',')}} DH</span>
                            <span class="base-price">$90.00</span>
                        </div>

                        <div class="product-buttons">
                            <a class="add-to-cart" href="" wire:click.prevent="add_to_cart">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            </a>

                            <a class="add-wishlist" href="#">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </a>

                            <a class="quickview" href="#">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>