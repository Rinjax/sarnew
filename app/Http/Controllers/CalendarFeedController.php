<?php

namespace App\Http\Controllers;

use App\Managers\Calendar\FeedManager;
use Illuminate\Http\Request;

class CalendarFeedController extends Controller
{
    protected $feedManager;

    public function __construct()
    {
        $this->feedManager = new FeedManager(); 
    }
    public function feed1a(Request $request)
    {
        return $this->feedManager->getFeed('1a', $request->input('start'), $request->input('end'));
    }

    public function feed2a(Request $request)
    {
        return $this->feedManager->getFeed('2a', $request->input('start'), $request->input('end'));
    }

    public function feed3a(Request $request)
    {
        return $this->feedManager->getFeed('3a', $request->input('start'), $request->input('end'));
    }
}
