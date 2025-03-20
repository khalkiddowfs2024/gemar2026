<header id="header">
    <!-- Topbar -->
    <div class="topbar">
        <!-- Close Topbar -->
        <div class="close-topbar">
            <i class="zmdi zmdi-close"></i>
        </div>

        <!-- Topbar Content -->
        <div class="container topbar-content">
            <div class="row">
                <!-- Topbar Left -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="topbar-left d-flex">
                        <div class="email">
                            <i class="fa fa-envelope" aria-hidden="true"></i>Email: tivatheme@gmail.com
                        </div>
                        <div class="skype">
                            <i class="fa fa-skype" aria-hidden="true"></i>Skype: tivatheme
                        </div>
                    </div>
                </div>

                <!-- Topbar Right -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="topbar-right d-flex justify-content-end">
                        <!-- My Account -->
                        <div class="dropdown account">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                My Account
                            </div>
                            <div class="dropdown-menu">
                                <div class="item">
                                    <a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
                                </div>
                                <div class="item">
                                    <a href="user-login.html" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
                                </div>
                                <div class="item">
                                    <a href="user-register.html" title="Register Account"><i class="fa fa-user"></i>Register</a>
                                </div>
                                <div class="item">
                                    <a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
                                </div>
                            </div>
                        </div>

                        <!-- Language -->
                        <div class="dropdown language">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('assets/shop/img/language-en.jpg')}}" alt="Language English">
                            </div>
                            <div class="dropdown-menu">
                                <div class="item">
                                    <a href="#" title="Language English"><img src="{{asset('assets/shop/img/language-en.jpg')}}" alt="Language English"> English</a>
                                </div>
                                <div class="item">
                                    <a href="#" title="Language French"><img src="{{asset('assets/shop/img/language-fr.jpg')}}" alt="Language French"> French</a>
                                </div>
                            </div>
                        </div>

                        <!-- Currency -->
                        <div class="dropdown currency">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                USD
                            </div>
                            <div class="dropdown-menu">
                                <div class="item">
                                    <a href="#" title="USD">USD</a>
                                </div>
                                <div class="item">
                                    <a href="#" title="EUR">EUR</a>
                                </div>
                                <div class="item">
                                    <a href="#" title="GBP">GBP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Open Topbar -->
        <div class="container active">
            <div id="toggle-topbar"><i class="zmdi zmdi-plus"></i></div>
        </div>
    </div>

    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Search -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-search">
                        <form action="#" method="get">
                            <input type="text" class="form-input" placeholder="Search">
                            <button type="submit" class="fa fa-search"></button>
                        </form>
                    </div>
                </div>

                <!-- Logo -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="index.html">
                            <img class="img-responsive" src="{{asset('assets/shop/img/logo.png')}}" alt="Logo">
                        </a>
                    </div>

                    <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
                </div>

                <!-- Cart -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    @livewire('cart')
                </div>
            </div>
        </div>
    </div>
</header>