<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kode Plåt AB</title>
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    </head>

    <body>
        {{-- include header layout --}}
        @include('layouts.header')
        <div class="main-content">
            <div class="container">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
        <script src="/js/app.js"></script>
    </body>
</html>
