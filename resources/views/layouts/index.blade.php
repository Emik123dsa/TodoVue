<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() )}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" value="{{ csrf_token() }}">
    <title>Document</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="app">

</div>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body> 
</html>