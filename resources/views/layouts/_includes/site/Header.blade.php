<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('titulo')</title>


    <!-- Favicon-->


    <!-- Favicons -->
    <link href="{{ asset('site/assets/img/logo.webp') }}" rel="icon">
    <link href="{{ asset('site/assets/img/logo.webp') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('site/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('site/assets/css/style.css') }}" rel="stylesheet">

    <style>
        .search-item {
            position: relative;
        }

        #search-form {
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            border: 1px solid #ddd;
            padding: 10px;
            display: flex;
            gap: 10px;
            z-index: 1000;
        }

        #search-form input[type="text"] {
            border: 1px solid #ddd;
            padding: 5px;
        }

        #search-form button {
            border: none;
            background: #007bff;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
        }

        #search-form button:hover {
            background: #0056b3;
        }
    </style>
    @yield('style')
</head>
