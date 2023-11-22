<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">


    <title>@yield('titulo')</title>
    <meta content="" name="description" />
    <meta content="cdci" name="author" />

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('xhtml/images/favicon.png') }}">
    <link href="{{ asset('xhtml/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('xhtml/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('xhtml/vendor/select2/css/select2.min.css') }}">

    <link href="{{ asset('xhtml/vendor/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('xhtml/vendor/sweetalert2/sweetalert2.min.js') }}"></script>


    <link href="{{ asset('xhtml/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('xhtml/css/style.css') }}" rel="stylesheet">


    	<!-- CkEditor -->
	<link href="{{ asset('xhtml/vendor/ckeditor/ckeditor.css') }}" rel="stylesheet">

    <script src="{{ asset('xhtml/js/jquery.min.js') }}"></script>
    <script src="{{ asset('xhtml/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('xhtml/vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('xhtml/vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('xhtml/vendor/flot-spline/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('xhtml/js/plugins-init/flot-init.js') }}"></script>

    <style>
        .swal2-container .select-wrapper {
            display: none !important;
        }

        div.swal2-select{
            display: none !important;
        }

        .DZ-bt-buy-now, .DZ-bt-support-now {
            display: none!important;
        }
    </style>
    @yield('style')
    @php
        
    @endphp


</head>
