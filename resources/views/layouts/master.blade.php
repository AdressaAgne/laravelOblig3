<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Give &amp; Get - @yield('title')</title>
    
    {{--    Basic Meta Tags     --}}
    
    <meta name="application-name" content="Give &amp; Get">
    <meta name="author"           content="Team Whisky">
    <meta name="description"      content="Give &amp; Get is a page where you can give stuff away or find free stuff you are looking for">
    <meta name="generator"        content="">
    <meta name="keywords"         content="give, get, find, free, stuff, resieve, gjerigknark, ">
    
    {{--   Stylesheets    --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
    
    {{--    Apple Icons     --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-icon-180x180.png') }}">
    
    {{--    Android Icons     --}}
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/img/favicon/android-icon-192x192.png') }}">
    
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    
    {{--    Windows Phone Icons     --}}
    <link rel="manifest" href="{{ asset('assets/config/manifest.json') }}">
    
    <meta name="msapplication-TileColor" content="#009688">
    
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon/ms-icon-144x144.png') }}">
    
    {{--    Android Theme Color     --}}
    <meta name="theme-color" content="#009688">
    
</head>
<body>
  
    @include('layouts.menu')
  
    <div class="row">
        <div class="col-8 col-m-10 col--center">
            @yield('content')
        </div>
    </div>
    
    
    <footer class="page-footer">
        <div class="col-8 col-m-10 col--center">
           <h2 class="page-header">Categories:</h2>
            @foreach($tags as $tag)
                  <a class="page-footer__tags" href="{{ url('/category', $tag->slug) }}">{{$tag->name}} ({{$tag->items->count()}})</a>
            @endforeach
        </div>
        <div class="page-footer__copy">© Team Whisky</div>
    </footer>
    
    {{--    Scripts     --}}
    
    <script src="{{ asset('assets/js/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    @yield('scripts')
</body>
</html>