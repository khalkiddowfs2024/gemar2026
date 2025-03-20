<!DOCTYPE html>
<html lang="fr">

@include('layouts_shop.head')

<body class="home home-1">
    <div id="all">
        <!-- Header -->
        <!-- @include('layouts_shop.header') -->

        <!-- Main Content -->
        <div id="content" class="site-content">


            <div class="container">
                <div class="row">
                    <!-- Sidebar -->
                    @include('layouts_shop.sidebar')
                    <!-- Page Content -->
                    <div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-category-page">
                            <!-- Nav Bar -->
                            @include('layouts_shop.navbar')
                            <div class="tab-content">
                                @yield('content')
                                
                            </div>
                            <!-- Pagination Bar -->
                            @include('layouts_shop.pagination')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        @include('layouts_shop.footer')
        <!-- Go Up button -->
        @include('layouts_shop.go_up_button')
        <!-- Page Loader -->
        @include('layouts_shop.preloader')
    </div>
    <!-- Vendor JS -->
    @include('layouts_shop.script')
    @livewireScripts

</body>
</html>