@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="container-fluid">
                    <div id="map" class="card-img-top" style="height: 25rem;" style="margin-right: -5rem; margin-left: -5rem;">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <h4 class="card-title">Team Training</h4>
                            <h4 class="card-title">{!! $cal->location->name !!}</h4>
                            <h5 class="float-md-left">{!! \Carbon\Carbon::parse($cal->start)->format('d/m/Y H:i') !!}</h5>
                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col-md">
                            <div class="card">
                                <div class="card-header">
                                    Attending
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        @foreach($cal->attendance as $member)
                                            <tr>
                                                <td>{!! $member->fullName() !!}</td>
                                                <td><button class="btn btn-sm btn-danger d-flex justify-content-center align-items-center"><span class="icon-minus "></span></button></td>
                                            </tr>
                                        @endforeach
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="col-md mt-xs-5">
                            <div class="card">
                                <div class="card-header">
                                    Not Attending
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        @foreach($cal->attendance as $member)
                                            <tr>
                                                <td>{!! $member->fullName() !!}</td>
                                                <td><button class="btn btn-sm btn-success d-flex justify-content-center align-items-center"><span class="icon-plus "></span></button></td>
                                            </tr>
                                        @endforeach
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

            <script type="text/javascript">
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
            </script>

@endsection