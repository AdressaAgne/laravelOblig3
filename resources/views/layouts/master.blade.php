<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Give &amp; Get - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>
  
  @include('layouts.menu')
  
   <div class="row">
        <div class="col-8 col-m-10 col--center">
            @yield('content')
        </div>
    </div>
    
    
    <script src="{{ asset('assets/js/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>