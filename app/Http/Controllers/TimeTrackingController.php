<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeTrackingController extends Controller
{
    public function create()
    {
        return view('time_tracking');
    }
}
