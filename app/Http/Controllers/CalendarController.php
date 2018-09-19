<?php

namespace App\Http\Controllers;

use App\Models\Calendar\CalendarType;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $calTypes = CalendarType::all();
        
        return view('pages.calendar.layout')->with('calTypes', $calTypes);
    }

}
