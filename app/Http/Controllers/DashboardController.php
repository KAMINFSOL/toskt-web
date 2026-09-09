<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function create()
    {
        $requests = DB::table('requests')->where('executor', Auth::user()->name)->latest()->take(3)->get();
        return view('dashboard')
            ->with('requests', $requests);
    }
}
