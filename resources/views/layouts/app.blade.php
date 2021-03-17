<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravelss') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome-4.1.0/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>

<body class="home-page">
<div class="wrap">
    <header id="header" class="header-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="images/home_1/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="top-nav">
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-xs-6">
                        <nav class="main-nav">
                            <ul class="list-inline">
                                <li class="menu-item-has-children">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="has-mega-menu">
                                    <a href="#">Lising</a>
                                </li>
                            <a href="#" class="btn-mobile-menu"></a>
                        </nav>
                        <!-- End Nav -->
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-6">
                        <div class="header-info">
                            <div class="box-account-lc box">
                                <a href="{{ route('login') }}" class="link-user-top">Login</a>
                            </div>
                            <div class="block-cart box">
                                <a href="{{ route('register') }}" class="link-cart-top">Register </a>        
                                <div class="block-content box-inner">
                                </div>
                            </div>
                        </div>
                        <!-- End Header Info -->
                    </div>
                </div>
            </div>
        </div>
    </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
