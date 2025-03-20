<!DOCTYPE html>
<html lang="fr">

@include('layouts_shop.head')
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="index.html">
                        <img class="img-responsive" src="{{asset('assets/shop/img/logo.png')}}" alt="Logo">
                    </a>
                </div>

                <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
            </div>


        </div>
    </div>
</div>



<body class="home home-1">
    <div id="all">
        <div id="content" class="site-content">
            <div class="container">
                @livewire('show-cart')
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