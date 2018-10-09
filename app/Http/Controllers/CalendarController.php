<?php

namespace App\Http\Controllers;

use App\Managers\Calendar\CalendarManager;
use App\Models\Calendar\Calendar;
use App\Models\Calendar\CalendarType;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    protected $CalendarManager;

    public function __construct()
    {
        $this->CalendarManager = new CalendarManager();
    }
    public function index()
    {
        $calTypes = CalendarType::all();
        
        return view('pages.calendar.layout')->with('calTypes', $calTypes);
    }

    public function viewEventTraining($id)
    {
        $cal = $this->CalendarManager->getCalendarEvent($id);

        $notAttending = $this->CalendarManager->getNonAttendingMembers($cal->attendance->pluck('id'));
        
        return view('pages.calendar.view-event-training')
            ->with('notAttending', $notAttending)
            ->with('cal', $cal);
    }

    public function viewEvent2a($id)
    {
        
    }

}
