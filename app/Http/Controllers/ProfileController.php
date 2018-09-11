<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $member = \Auth::user();
        return view('pages.profile.layout')->with('member', $member);
    }
}
