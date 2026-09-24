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
        $timeTrackings = DB::table('time_trackings')->where('name', Auth::user()->name)->paginate(10);
        return view('time_tracking', compact('timeTrackings'));
    }

    public function timeMark()
    {
        $users = DB::table('users')->where('name', Auth::user()->name)->get();
        return view('time_mark')->with('users', $users);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => ['required', 'date'],
            'name' => ['required', 'string'],
            'arrival_time' => ['required'],
            'leave_time' => ['required']
        ]);

        TimeTracking::create([
            'date' => $request->date,
            'name' => $request->name,
            'arrival_time' => $request->arrival_time,
            'leave_time' => $request->leave_time
        ]);

        return redirect()->route('time_tracking');
    }
}
