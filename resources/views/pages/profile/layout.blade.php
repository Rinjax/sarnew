@extends('layout')




@section('content')
    <div class="main-area">
        
        @include('modal.updateMobile')

        
        <div class="row">
            <div class="col-md-12">
                @include('pages.profile.partial.details-tile')
            </div>


            <div class="col-md-6">

            </div>
        </div>



    </div>
@endsection





@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker2').datetimepicker({
                inline: true,
                sideBySide: true,
                stepping: 15,
                format: ('YYYY-MM-DD HH:mm')
            });
        });
    </script>




@endsection