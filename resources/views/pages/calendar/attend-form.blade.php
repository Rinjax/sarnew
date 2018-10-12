@if($memberAttending)

    <form action="{!! route('calendar.unattend') !!}" method="post">{!! csrf_field() !!}
        <input type="hidden" name="cal_id" value="{!! $cal->id !!}">
        <button type="submit" class="btn btn-warning btn- btn-attend mt-4">UnAttend</button>
    </form>

@else
    <form action="{!! route('calendar.attend') !!}" method="post">{!! csrf_field() !!}
        <input type="hidden" name="cal_id" value="{!! $cal->id !!}">
        <button type="submit" class="btn btn-success btn-attend mt-4">Attend</button>
    </form>

@endif