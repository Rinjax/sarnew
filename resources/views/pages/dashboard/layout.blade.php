@extends('layouts.layout')

@section('title', 'Dashboard')


@section('content')

    <div class="space-3">

        @include('pages.dashboard.partial.count-tiles')

        <div class="row space-3">
            <div class="col-xs-12 col-md-6">
                @include('pages.dashboard.partial.member-table')
            </div>
            <div class="col-xs-12 col-md-6">
                @include('pages.dashboard.partial.dog-table')
            </div>
        </div>

    </div>




@endsection
