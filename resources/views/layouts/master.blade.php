<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    <div class="container">
        @include('layouts.header')
        @include('layouts.boxinfo')
        @yield('content')
    </div>

</body>
</html>