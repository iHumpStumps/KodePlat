<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <!-- CSRF Token -->
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>Kode Plåt AB</title>

    <!-- Fonts -->
    <link
        rel="dns-prefetch"
        href="//fonts.gstatic.com"
    >
    <link
        href="https://fonts.googleapis.com/css?family=Nunito"
        rel="stylesheet"
    >
    <style>
        .HoverDiv {
            position: relative;
            overflow: hidden;
        }

        .HoverDiv h1, .HoverDiv img {
            max-width: 100%;
            text-align:center;
            -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .HoverDiv:hover h1, .HoverDiv:hover img {
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        img {
            display:inline-block;
            position:relative;
            z-index:1;
        }

        img:before {
            content:'';
            width:100%; height:100%;
            position:absolute;
            top:-1px; left:0;
            background:red;
            z-index:-1;
            border: 1px solid #ccc;
            -webkit-transform: skewX(-20deg);
            -ms-transform: skewX(-20deg);
            transform: skewX(-20deg);
            -webkit-transform-origin:0 0;
            -ms-transform-origin:0 0;
            transform-origin:0 0;
        }

        .navbar-main {
            text-align: center;
            height: 50px;
            position: relative;
        }

        .navbar-div-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .navbar-div-right {
            position: absolute;
            top: 50%;
            right: 0;
            z-index: 999;
            transform: translate(0, -50%);
        }

        .white-navbar-text {
            color: #FFFFFF !important;
        }

        .nav-item a:hover {
            /*color: #0071B8 !important;*/
            font-weight: bold;
            cursor: pointer;
        }
    </style>

</head>

<body>
<div id="app">
    <!-- include Header layout -->
@include('layouts.header')

<!-- container for displaying dynamic content -->

    <div class="main-content">
        <div class="container-xl py-3">
            @yield('content')
        </div>
    </div>
    <!-- include Footer layout -->
    @include('layouts.footer')
</div>
<link
    href="{{ asset('css/app.css') }}"
    rel="stylesheet"
>
<script
    src="{{ asset('js/app.js') }}"
    defer
></script>
</body>

</html>
