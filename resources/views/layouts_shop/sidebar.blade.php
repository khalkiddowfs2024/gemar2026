<div id="left-column" class="sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <!-- Block - Product Categories -->
    @php
    $familles=App\Models\Famille::all();
    @endphp
    <div class="block product-categories">
        <h3 class="block-title">Categories</h3>

        <div class="block-content">
            @foreach ($familles as $famille)

            <div class="item">
                <span class="arrow collapsed" data-toggle="collapse" data-target="#{{$famille->id}}" aria-expanded="false" role="button">
                    <i class="zmdi zmdi-minus"></i>
                    <i class="zmdi zmdi-plus"></i>
                </span>

                <a class="category-title" href="product-grid-left-sidebar.html">{{$famille->famille}}</a>
                <div class="sub-category collapse" id="{{$famille->id}}" aria-expanded="true" role="main">
                    @php
                    $sous_familles=App\Models\SousFamille::where('famille_id',$famille->id)->get();
                    @endphp
                    @foreach ($sous_familles as $sous_famille )

                    <div class="item">
                        <a href="product-grid-left-sidebar.html">{{$sous_famille->sous_famille}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach

            <div class="item">
                <a class="category-title" href="product-grid-left-sidebar.html">Fresh Meats</a>
            </div>
        </div>
    </div>


    <!-- Block - Filter -->
    <div class="block product-filter">
        <h3 class="block-title">Catalog</h3>

        <div class="block-content">
            <div class="filter-item">
                <h3 class="filter-title">Categories</h3>

                <div class="filter-content">
                    <ul>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Tomato <span class="quantity">(20)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Broccoli <span class="quantity">(14)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Cabbage <span class="quantity">(8)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Cucumber <span class="quantity">(12)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Eggplant <span class="quantity">(15)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Pea <span class="quantity">(22)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Pineapple <span class="quantity">(20)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Lettuce <span class="quantity">(10)</span></a>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="filter-item">
                <h3 class="filter-title">Manufacture</h3>

                <div class="filter-content">
                    <ul>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Samsung <span class="quantity">(20)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Dell <span class="quantity">(14)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Polygon <span class="quantity">(8)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Newment <span class="quantity">(12)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Asus <span class="quantity">(15)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Mac <span class="quantity">(22)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Vaio <span class="quantity">(20)</span></a>
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <a>Lettuce <span class="quantity">(10)</span></a>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="filter-item">
                <h3 class="filter-title">By Price</h3>

                <div class="block-content">
                    <div id="slider-range" class="tiva-filter">
                        <div class="filter-item price-filter">
                            <div class="layout-slider">
                                <input id="price-filter" name="price" value="0;100" />
                            </div>
                            <div class="layout-slider-settings"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter-item">
                <h3 class="filter-title">By Color</h3>

                <div class="block-content">
                    <div class="filter-color">
                        <div class="left">
                            <div class="item">
                                <label class="color color-1"></label>
                                <span class="color-label">Blue</span>
                                <span>(3)</span>
                            </div>
                            <div class="item">
                                <label class="color color-3"></label>
                                <span class="color-label">Yellow</span>
                                <span>(2)</span>
                            </div>
                            <div class="item">
                                <label class="color color-5"></label>
                                <span class="color-label">Pink</span>
                                <span>(2)</span>
                            </div>
                        </div>
                        <div class="right">
                            <div class="item">
                                <label class="color color-2"></label>
                                <span class="color-label">Green</span>
                                <span>(1)</span>
                            </div>
                            <div class="item">
                                <label class="color color-4"></label>
                                <span class="color-label">Brown</span>
                                <span>(3)</span>
                            </div>
                            <div class="item">
                                <label class="color color-6"></label>
                                <span class="color-label">Red</span>
                                <span>(10)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Tags -->
    <div class="block tags product-tags">
        <h3 class="block-title">Product Tags</h3>

        <div class="block-content">
            <ul>
                <li><a href="#" title="Show products matching tag Hot Trend">Hot Trend</a></li>
                <li><a href="#" title="Show products matching tag Jewelry">Jewelry</a></li>
                <li><a href="#" title="Show products matching tag Man">Man</a></li>
                <li><a href="#" title="Show products matching tag Party">Party</a></li>
                <li><a href="#" title="Show products matching tag SamSung">SamSung</a></li>
                <li><a href="#" title="Show products matching tag Shirt Dresses">Shirt Dresses</a></li>
                <li><a href="#" title="Show products matching tag Shoes">Shoes</a></li>
                <li><a href="#" title="Show products matching tag Summer">Summer</a></li>
                <li><a href="#" title="Show products matching tag Sweaters">Sweaters</a></li>
                <li><a href="#" title="Show products matching tag Winter">Winter</a></li>
                <li><a href="#" title="Show products matching tag Woman">Woman</a></li>
            </ul>
        </div>
    </div>
</div>