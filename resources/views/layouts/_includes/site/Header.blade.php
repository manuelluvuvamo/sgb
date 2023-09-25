<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="AS; Sistema de Gestão Bibliotecária, Artigo, Blog, Literatura, Angola, Comunidade, Rubrica, Livros" />
    <meta name="author" content="Sistema de Gestão Bibliotecária" />
    <meta name="robots" content="" />
    <meta name="description" content="Sistema de Gestão Bibliotecária: Blog da comunidade de escritores de artigos de Angola" />
    <meta property="og:title" content="Sistema de Gestão Bibliotecária - Blog" />
    <meta property="og:description" content="Sistema de Gestão Bibliotecária: Blog da comunidade de escritores de artigos de Angola" />
    <title>@yield('titulo')</title>
    <link href="{{ asset('site/assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- <link rel="stylesheet" href="{{ asset('site/assets/fonts/all.min.css') }}"> -->

    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}" />

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Ubuntu:wght@400;500;700&display=swap"
        rel="stylesheet" />

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="{{ asset('site/assets/js/tailwindcss3.3.js') }}"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="{{ asset('site/assets/css/tailwindcss.css') }}" />

    @yield('style')
</head>
