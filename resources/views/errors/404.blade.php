@extends('html')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 style="padding-top: 2rem;">Opps! something went wrong</h1>
                <h1>404 error</h1>
                <h2>{{ $exception->getMessage() }}</h2>
                <h3>Couldn't find what was requested</h3>
                <img class="mx-auto d-block" src="/img/dog-poop.jpg" alt="404">
            </div>
        </div>
    </div>


@endsection