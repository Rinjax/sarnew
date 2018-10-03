<?php

namespace App\Http\Controllers;

use App\Models\Calendar\Calendar;
use App\Models\Calendar\CalendarType;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $calTypes = CalendarType::all();
        
        return view('pages.calendar.layout')->with('calTypes', $calTypes);
    }

    public function viewEventTraining($id)
    {
        $cal = Calendar::where('id', $id)
            ->with('attendance')
            ->with('location')
            ->first();

        
        return view('pages.calendar.view-event-training')->with('cal', $cal);
    }

    public function viewEvent2a($id)
    {
        
    }

}
