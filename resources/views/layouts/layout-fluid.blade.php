@extends('layouts.html')

@section('body')

    @include('nav.main-nav')


    @include('common.flashMessages')

    <div id="content" class="container-fluid space-2">
        @yield('content')
    </div>

@endsection