<?php

namespace App\Http\Controllers;

use App\Managers\Calendar\CalendarManager;
use App\Models\Calendar\Calendar;
use App\Models\Calendar\CalendarType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        
        $memberAttending = $this->CalendarManager->memberAttending(\Auth::id(), $cal->attendance->pluck('id')->toArray());

        $notAttending = $this->CalendarManager->getNonAttendingMembers($cal->attendance->pluck('id'));
        
        return view('pages.calendar.view-event-training')
            ->with('notAttending', $notAttending)
            ->with('memberAttending', $memberAttending)
            ->with('cal', $cal);
    }

    public function viewEvent2a($id)
    {
        
    }

    public function attend(Request $request)
    {
        $addAttend = $this->CalendarManager->attend($request->input('cal_id'), \Auth::id());

        if($addAttend === true){
            Session::flash('success', 'Attending Event');
        }else{
            Session::flash('error', 'Sorry, There seems to have been a problem >> ' . $addAttend->getMessage());
        }

        return back();
    }

    public function unattend(Request $request)
    {
        $removeAttend = $this->CalendarManager->unattend($request->input('cal_id'), \Auth::id());

        if($removeAttend === true){
            Session::flash('success', 'Not Attending Event');
        }else{
            Session::flash('error', 'Sorry, There seems to have been a problem >> ' . $removeAttend->getMessage());
        }

        return back();
    }

}
