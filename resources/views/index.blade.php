<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() )}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" value="{{ csrf_token() }}">
    <title>{{ config(index.name, 'Supervisor') }}</title>
</head>
<body>

    @yield('header') 

        @yield('sidebar')
 
    @yield('footer')

</body> 
</html>