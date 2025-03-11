@extends('layouts.app')
@section('content')


<body class="home home-1">
    <div id="all">


        <!-- Main Content -->
        <div id="content" class="site-content">
            <!-- Breadcrumb -->



            <div class="container">
                <div class="row">

                    <!-- Page Content -->
                    <div id="center-column" class="col-lg-12 col-md-12">
                        <div class="product-category-page">
                            <!-- Nav Bar -->
                            <div class="products-bar">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="total-products">There are 12 products</div>
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="filter-bar">
                                            <form action="#" class="pull-right">
                                                <div class="select">
                                                    <select class="form-control">
                                                        <option value="">Sort By</option>
                                                        <option value="3">Product Name: A to Z</option>
                                                        <option value="4">Product Name: Z to A</option>
                                                        <option value="5">In stock</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success">Ajouter </button>

                            <div class="tab-content">
                                <!-- Products Grid -->
                                <div class="tab-pane active" id="products-grid">
                                    <div class="products-block">
                                        <div class="row">
                                            @foreach($categories as $categorie)
                                            <div class="col-md-3 col-sm-4 col-xs-12">
                                                <div class="product-item">
                                                    <div class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img class="img-responsive" src="img/product/4.jpg" alt="Product Image">
                                                        </a>
                                                    </div>

                                                    <div class="product-title">
                                                        <a href="product-detail-left-sidebar.html">
                                                            {{$categorie->categorie}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination Bar -->
                            <div class="pagination-bar">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="text">Showing 1-12 of 20 item(s)</div>
                                    </div>

                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="pagination">
                                            <ul class="page-list">
                                                <li><a href="#" class="prev">Previous</a></li>
                                                <li><a href="#" class="current">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#" class="next">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>

</html>
@endsection