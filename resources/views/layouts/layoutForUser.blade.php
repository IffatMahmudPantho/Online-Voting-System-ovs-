<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "{{asset('css/app.css')}}">
    <title>{{config('app.name','Online Voting System')}}</title>

        
        
        
    </head>
    <body>
        @include('inc.navbar3')
        <div class = " container">
             @yield('content')
    </body>
</html>
