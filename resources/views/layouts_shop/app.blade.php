<!DOCTYPE html>
<html lang="fr">

@include('shop.head')

<body class="home home-1">
    <div id="all">
        <!-- Header -->
        <!-- @include('shop.header') -->

        <!-- Main Content -->
        <div id="content" class="site-content">


            <div class="container">
                <div class="row">
                    <!-- Sidebar -->
                    @include('shop.sidebar')
                    <!-- Page Content -->
                    <div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-category-page">
                            <!-- Nav Bar -->
                            @include('shop.navbar')
                            <div class="tab-content">
                                @yield('content')
                                
                            </div>
                            <!-- Pagination Bar -->
                            @include('shop.pagination')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        @include('shop.footer')
        <!-- Go Up button -->
        @include('shop.go_up_button')
        <!-- Page Loader -->
        @include('shop.preloader')
    </div>
    <!-- Vendor JS -->
    @include('shop.script')
    @livewireScripts

</body>
</html>