<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', config('app.name'))</title>
        @include('layouts.style')
    </head>
    <body>
        <div class="container">
            @include('layouts.header')
            @yield('content')
        </div>
        @include('layouts.scripts')
    </body>
</html>
