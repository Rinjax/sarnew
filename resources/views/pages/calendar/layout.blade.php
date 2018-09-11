@extends('layouts.layout-fluid')

@section('content')

    <div id="calendar"></div>
@endsection


@section('scripts')
    @parent

    <script>
        $('#calendar').fullCalendar({
            // put your options and callbacks here
        })
    </script>

@endsection