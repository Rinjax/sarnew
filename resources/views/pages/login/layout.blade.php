@extends('html')

@section('headcss')

    <link rel="stylesheet" href="/css/login.css"/>

@endsection


@section('body')

    <div class="h-100 login-background">
        <div class="container-fluid h-100 d-flex align-items-center" style="padding: 0">
            <div class="row login-banner" style="margin: 0;">
                <div class="col-sm">
                    <img class="d-none  mx-auto d-lg-block" src="/img/chihu.jpg" alt="dog">
                </div>
                <div class="col-sm justify-content-center">
                    <img class="mx-auto d-block" src="/img/round-logo.png" alt="dog" style="padding-bottom: 2rem;">
                    <p class="text-center">
                        <a href="{!! Route('logon') !!}" class="btn btn-loz">Logon</a>
                    </p>
                </div>
                <div class="col-sm justify-content-center">
                    <img class="d-none mx-auto d-lg-block" src="/img/chihu.jpg" alt="dog">
                </div>
            </div>
        </div>
@endsection