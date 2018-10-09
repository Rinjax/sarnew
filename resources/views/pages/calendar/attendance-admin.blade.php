<div class="row mt-4">
    <div class="col-md">
        <div class="card card-attendance">
            <div class="card-header">
                Attending: <strong>{!! count($cal->attendance) !!}</strong>
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
        <div class="card card-attendance">
            <div class="card-header">
                Not Attending
            </div>
            <div class="card-body">
                <table class="table">
                    @foreach($notAttending as $member)
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