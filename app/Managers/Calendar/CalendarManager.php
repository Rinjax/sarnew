<?php

namespace App\Managers\Calendar;

use App\Models\Calendar\Calendar;
use App\Models\Calendar\CalendarAttendance;
use App\Models\Member\Member;

class CalendarManager
{
    /**
     * get the Calendar record with relations
     * @param $id
     * @return mixed
     */
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

    /**
     * return true or false if the user is attending that event
     * @param $member_id
     * @param array $attending
     * @return bool
     */
    public function memberAttending($member_id, array $attending)
    {
        return in_array($member_id, $attending);
    }

    /**
     * Add attendance record for a calendar event
     * @param $cal_id
     * @param $member_id
     * @return bool|\Exception
     */
    public function attend($cal_id, $member_id)
    {
        try{
            CalendarAttendance::updateOrCreate([
                'calendar_id' => $cal_id,
                'member_id' => $member_id
            ],[
                'calendar_id' => $cal_id,
                'member_id' => $member_id
            ]);
            
            return true;

        }catch(\Exception $e){
            return $e;
        }
    }

    /**
     * Remove attendance record for a calendar event
     * @param $cal_id
     * @param $member_id
     * @return bool|\Exception
     */
    public function unattend($cal_id, $member_id)
    {
        try{
            CalendarAttendance::where('calendar_id', $cal_id)->where('member_id', $member_id)->firstOrFail()->delete();
            
            return true;
            
        }catch(\Exception $e){
            return $e;
        }
    }
}