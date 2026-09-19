<?php

namespace App\Http\Controllers;

use App\Models\TimeTracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TimeTrackingController extends Controller
{
    public function create()
    {
        $timeTrackings = DB::table('time_trackings')->where('name', Auth::user()->name)->latest()->get();
        return view('time_tracking')->with('timeTrackings', $timeTrackings);
    }
}
