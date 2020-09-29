<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- [CSS] -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-4.3.1/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- [CSS] -->

        <link rel="shortcut icon" href="{{ asset('image/favicon.png') }}" type="image/png">
        <title>@yield('title')</title>
    </head>
    <body>
        @include('layouts.header')
        
        <div class="search-box bg-info text-center">
            <h3>Find The Best Therapist ...</h3>
            <form action="{{ route('search') }}" method="POST" onkeydown="return event.key != 'Enter';">
                @csrf
                <input type="text" name="name" id="keyword" placeholder="Type the therapist name , then press ENTER">
            </form>
        </div>

        <div class="content row">
            <aside class="col-md-3">
                @include('layouts.sidenav')
            </aside>
            <main class="col-md-9 pt-3">
                @yield('content')
            </main>
        </div>

        @include('layouts.footer')

        <!-- [JS] -->
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- [JS] -->
    </body>
</html>
