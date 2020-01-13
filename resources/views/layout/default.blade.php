<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>

<body>
<div>
    @include('includes.header')
    <div class="container">
        @yield('content')
    </div>
</div>

</body>

</html>
