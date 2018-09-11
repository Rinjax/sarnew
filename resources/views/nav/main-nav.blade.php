<div class="container-fluid">
    <div class="row">
        <div class="col-sm" style="background-color: #323232">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="navbar-brand">
                    <img class="img-fluid rounded-circle menu-logo" alt="logo" src="{{asset('img/SAR logo.png')}}"/>
                    SD Members Portal
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        {!! $MainMenu !!}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>