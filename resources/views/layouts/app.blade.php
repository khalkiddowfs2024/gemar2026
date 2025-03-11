<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GE MAROC 2026</title>
    <meta name="keywords" content="Organic, Fresh Food, Farm Store">
    <meta name="description" content="Commerce electronique pour les petits commerces">
    <meta name="author" content="tivatheme">

    @include('layouts.css')
</head>

<body class="home home-5">
    <div id="all">
        <!-- Header -->
        @include('layouts.sidebar')
        <!-- Main Content -->
        @yield('content')
        <!-- Footer -->
        @include('layouts.footer')
        <!-- Go Up button -->
        @include('layouts.go_up_button')
        <!-- Page Loader -->
        <!--@include('layouts.preloader')-->
    </div>
    <!-- Vendor JS -->
    @include('layouts.js')
</body>


</html>