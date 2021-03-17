<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravelss') }}</title>

    <link rel="icon" href="seller/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="seller/images/dashboard/favicon.png" type="image/x-icon">
    <title></title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/css/fontawesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/css/flag-icon.css') }}">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/css/jsgrid.css') }}">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/css/themify-icons.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/css/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/css/admin.css') }}">
</head>

<body>


<!-- page-wrapper Start-->
<div class="page-wrapper">
    @include('seller.layout.header')
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        @include('seller.layout.sidebar')
        <div class="page-body">
            @yield('content')
        </div>

        <footer>
            @include('seller.layout.footer')
        </footer>
    </div>
</div>

<!-- latest jquery-->
<script src="{{ asset('seller/js/jquery-3.3.1.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('seller/js/popper.min.js') }}"></script>
<script src="{{ asset('seller/js/bootstrap.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('seller/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('seller/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- Sidebar jquery-->
<script src="{{ asset('seller/js/sidebar-menu.js') }}"></script>

<!-- touchspin js-->
{{-- <script src="{{ asset('seller/js/touchspin/vendors.min.js') }}"></script> --}}
<script src="{{ asset('seller/js/touchspin/touchspin.js') }}"></script>
<script src="{{ asset('seller/js/touchspin/input-groups.min.js') }}"></script>

<!--Customizer admin-->
<script src="{{ asset('seller/js/admin-customizer.js') }}"></script>

<!-- Jsgrid js-->
<script src="{{ asset('seller/js/jsgrid/jsgrid.min.js') }}"></script>
<script src="{{ asset('seller/js/jsgrid/griddata-manage-product.js') }}"></script>
<script src="{{ asset('seller/js/jsgrid/jsgrid-manage-product.js') }}"></script>

<!--right sidebar js-->
<script src="{{ asset('seller/js/chat-menu.js') }}"></script>

<!--script admin-->
<script src="{{ asset('seller/js/admin-script.js') }}"></script>

<!-- form validation js-->
<script src="{{ asset('seller/js/dashboard/form-validation-custom.js') }}"></script>

<!-- ckeditor js-->
<script src="{{ asset('seller/js/editor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('seller/js/editor/ckeditor/styles.js') }}"></script>
<script src="{{ asset('seller/js/editor/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('seller/js/editor/ckeditor/ckeditor.custom.js') }}"></script>

<!-- Zoom js-->
<script src="{{ asset('seller/js/jquery.elevatezoom.js') }}"></script>
<script src="{{ asset('seller/js/zoom-scripts.js') }}"></script>

</body>
</html>
