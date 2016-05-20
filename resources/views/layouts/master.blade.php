<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Give &amp; Get - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
    
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
            @yield('footer')
        </div>
        <div class="page-footer__copy">© Team Whisky</div>
    </footer>
    
    <script src="{{ asset('assets/js/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    @yield('scripts')
</body>
</html>