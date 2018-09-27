<?php

namespace App\Models\Calendar;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendar';

    protected $guarded = ['id'];


    public function type()
    {
        return $this->hasOne('App\Models\Calendar\CalendarType', 'code', 'code');
    }
    public function location()
    {
        return $this->hasOne('App\Models\TrainingLocation','id','location_id');
    }
    
    public function attendance()
    {
        return $this->belongsToMany('App\Models\Member','CalendarAttendance')->orderBy('name');
    }
    
    
    public function isAttending($user_id)
    {
        foreach ($this->belongsToMany('App\Models\Member','CalendarAttendance')->get() as $attendee){
            if($user_id === $attendee->id){
                return true;
            }
        }
        return false;
    }

    public function dogAssessment()
    {
        return $this->hasOne('App\Models\DogAssessments');
    }
}
