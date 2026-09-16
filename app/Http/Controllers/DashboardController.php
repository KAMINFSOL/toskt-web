<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function create()
    {
        $requests = DB::table('requests')->where('executor', Auth::user()->name)->latest()->take(3)->get();
        $files = DB::table('files')->latest()->take(3)->get();

        $stats = Request::query()
            ->select('status', DB::raw('COUNT(*) as count'))
            ->groupBy('status')
            ->pluck('count', 'status');

        $data = [
            'new'      => $stats->get('new', 0),
            'done'     => $stats->get('done', 0),
            'canceled' => $stats->get('canceled', 0)
        ];

        return view('dashboard', compact('data'))
            ->with('requests', $requests)
            ->with('files', $files);
    }
}
