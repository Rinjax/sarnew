<?php

namespace App\Models\Calendar;

use Illuminate\Database\Eloquent\Model;

class CalendarType extends Model
{
    protected $table = 'calendar_types';
    
    protected $guarded = ['id'];
}
