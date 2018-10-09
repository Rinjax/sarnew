<?php

namespace App\Managers\Calendar;

use App\Models\Calendar\Calendar;
use App\Models\Member\Member;

class CalendarManager
{
    public function getCalendarEvent($id)
    {
        return Calendar::where('id', $id)
            ->with('attendance')
            ->with('location')
            ->first();
    }


    /**
     * Return the members whos IDs are not in the provided array, and are active
     * @param $attending
     * @return mixed
     */
    public function getNonAttendingMembers($attending)
    {
        return Member::whereNotIn('id', $attending)->where('active',1)
            ->orderBy('firstname')
            ->orderBy('surname')
            ->get();
    }
}