@extends('layouts.layout-fluid')

@section('content')

    <div id="calendar" class=""></div>
@endsection


@section('scripts')
    @parent

    <script>
        $('#calendar').fullCalendar({
            defaultView: $(window).width() < 765 ? 'listWeek':'month'
        })
    </script>

@endsection