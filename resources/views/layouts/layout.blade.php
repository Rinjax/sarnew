@extends('layouts.html')

@section('body')

   @include('nav.main-nav')


    <div id="content" class="container space-2">
        @include('common.flashMessages')

        @yield('content')
    </div>

@endsection