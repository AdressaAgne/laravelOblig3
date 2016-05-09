<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>
  
  @include('layouts.menu')
  
   <div class="row">
        <div class="col-8 col-m-10 col--center">
            @yield('content')
        </div>
    </div>
</body>
</html>