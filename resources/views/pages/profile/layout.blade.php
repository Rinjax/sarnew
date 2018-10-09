@extends('layouts.layout')




@section('content')
    <div class="main-area">

        <div class="row mt-2">
            <div class="col">
                <h1 class="text-center">{!! $member->fullname() !!}</h1>
            </div>
        </div>

        <div class="mt-1">
            <div class="card mx-auto" style="max-width: 25rem">
                <img class="card-img-top" src="{!! asset('img/profile/humans/'.$member->profile_pic) !!}" alt="Card image">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <strong>Call Sign</strong>
                        </div>
                        <div class="col">
                            {!! $member->callsign !!}
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <strong>Contact</strong>
                        </div>
                        <div class="col">
                            {!! $member->contact !!}
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <strong>Email</strong>
                        </div>
                        <div class="col text-truncate ">
                            {!! $member->email !!}
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <strong>Status</strong>
                        </div>
                        <div class="col">
                            <span class="
                            @if($member->status == 'Training')text-status-purple
                            @elseif($member->status == 'Operational')text-status-green
                            @elseif($member->status == 'Non-Operational')text-status-red
                            @endif">{{$member->status}}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>
@endsection





@section('scripts')


@endsection