<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Give &amp; Get - @yield('title')</title>
    
    {{--    Basic Meta Tags     --}}
    
        
    <meta name="apple-mobile-web-app-title" content="Give & Get">
    <meta name="application-name" content="Give & Get">
    <meta name="author"           content="Team Whisky">
    <meta name="description"      content="Give &amp; Get is a page where you can give stuff away or find free stuff you are looking for">
    <meta name="generator"        content="">
    <meta name="keywords"         content="give, get, find, free, stuff, resieve, gjerigknark, ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{--   Stylesheets    --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
    
    @yield('head')
    
    {{--    Apple     --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicon/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicon/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicon/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicon/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicon/apple-touch-icon-152x152.png') }}">
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon-180x180.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/img/favicon/apple-icon-180x180.png') }}"/>
    
    {{--  Start Up Image  --}}
    <link rel="apple-touch-startup-image" href="{{ asset('assets/img/favicon/startup.png') }}" />
    
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    
    {{--    Android     --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/android-chrome-192x192.png') }}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}" sizes="16x16">
    
    <meta name="mobile-web-app-capable" content="yes">
    
    {{--    Windows Phone Icons     --}}
    <link rel="manifest" href="{{ asset('assets/img/favicon/manifest.json') }}">
    
    <meta name="msapplication-TileColor" content="#009688">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon/mstile-144x144.png') }}">
    
    {{--    Android Theme Color     --}}
    <meta name="theme-color" content="#009688">
    
    {{--  Browsers  --}}
    <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}" color="#009688">
    
</head>
<body>
  
    @include('layouts.menu')
  
    <div class="row">
        <div class="col-8 col-m-10 col--center">
            @yield('content')
        </div>
    </div>
    
    
    <footer class="page-footer col-12">
        <div class="col-8 col-m-10 col--center">
            <div class="row">
                <h2 class="page-header">Categories:</h2>
                @foreach($tags as $tag)
                    <div class="col-l-3 col-4 col-m-6">
                        <a class="page-footer__tags" href="{{ url('/category', $tag->slug) }}">{{$tag->name}} ({{$tag->items->count()}})</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="page-footer__copy">© Team Whisky</div>
    </footer>
    
    {{--    Scripts     --}}
    
    <script src="{{ asset('assets/js/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/min/main-min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    @yield('scripts')
</body>
</html>