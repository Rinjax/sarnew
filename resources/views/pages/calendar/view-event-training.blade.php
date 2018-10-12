@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="">
                    <img class="card-img-top" src="{!! asset('img/page_asset/background.jpg') !!}" alt="logo" style="max-height: 15rem;">
                    {{--<div id="map" class="card-img-top" style="height: 20rem; margin-right: -5rem; margin-left: -5rem;">--}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">

                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col-md">
                            <h4 class="text-sm-center">Team Training</h4>
                            <h4 class="text-sm-center">{!! $cal->location->name !!}</h4>
                            <h5 class="text-sm-center">{!! \Carbon\Carbon::parse($cal->start)->format('d/m/Y H:i') !!}</h5>

                        </div>
                        <div class="col-md mt-xs-5">
                            <div class="card card-attendance">
                                <div class="card-header">
                                    Attending: <strong>{!! count($cal->attendance) !!}</strong>
                                    <span class="icon-user" style="font-size: 1.5rem"></span>
                                    <span class="icon-stopwatch" style="font-size: 1.3rem"></span>

                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        @foreach($cal->attendance as $member)
                                            <tr>
                                                <td>{!! $member->fullName() !!}</td>
                                                <td><input id="start_{!! $member->id !!}" class="text-center form-control" type="text" placeholder="start"></td>
                                                <td><input id="end_{!! $member->id !!}" class="text-center form-control" type="text" placeholder="finish"></td>
                                            </tr>
                                        @endforeach
                                    </table>

                                </div>
                            </div>

                            @if(\Carbon\Carbon::parse($cal->start) >= \Carbon\Carbon::now())
                                @include('pages.calendar.attend-form')
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

            {{--<script type="text/javascript">
                function initMap(lat, long) {

                    console.log(typeof lat);

                    lat = (lat == null) || (typeof lat == 'undefined') ?  51.0497069 : lat;
                    long = (long == null) || (typeof long == 'undefined') ?  -0.2028727 : long;

                    console.log(lat, long);

                    var point = {lat: lat, lng: long};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 9,
                        center: point
                        //mapTypeId: 'map'

                    });
                }
            </script>



            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key={!! env('GOOGLE_MAP_APIKEY') !!}&callback=initMap">
            </script>--}}

@endsection