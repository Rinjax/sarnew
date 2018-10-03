@extends('layouts.layout')




@section('content')
    <div class="main-area">

        <div class="row mt-2">
            <div class="col">
                <h1 class="text-center">{!! $member->fullname() !!}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="{!! asset('img/profile/humans/default.jpg') !!}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection





@section('scripts')


@endsection