<!doctype html>
<html lang=hu>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIKER - @yield('title')</title>
    <link rel="shortcut icon" href="img/Logos/Hiker_Logo_Green.png">
</head>
<body>
    @include('layouts.nav')
<div class="container">
    @yield('content')
</div>
</body>
    @yield('script')
</html>