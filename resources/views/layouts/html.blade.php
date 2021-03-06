<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>


    <title>Search Dogs Sussex</title>


    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @yield('headcss')

    @yield('headjs')


</head>

<body>

@yield('body')



<script src="{{ mix('/js/app.js') }}"></script>

@yield('scripts')
</body>

</html>