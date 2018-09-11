<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search Dogs Sussex</title>

    <meta name="csrf_token" content="{!! csrf_token() !!}"/>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @yield('headcss')

    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('headjs')


</head>

<body>

@yield('body')



@yield('scripts')
</body>

</html>