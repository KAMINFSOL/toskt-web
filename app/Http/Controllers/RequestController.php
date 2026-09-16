<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function create()
    {
        $requests = DB::table('requests')->where('executor', Auth::user()->name)->latest()->get();
        return view('requests')->with('requests', $requests);
    }

    public function new_request()
    {
        $subdivisions = DB::table('subdivisions')->get();
        return view('new_request')->with('subdivisions', $subdivisions);
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => ['required', 'string'],
            'from' => ['required','string'],
            'subdivision' => ['required','string'],
            'cabinet' => ['required','string'],
            'description' => ['required','string'],
            'telephone' => ['required','string'],
            'executor' => ['required','string']
        ]);

        \App\Models\Request::create([
            'number' => $request->number,
            'from' => $request->from,
            'subdivision' => $request->subdivision,
            'cabinet' => $request->cabinet,
            'description'=> $request->description,
            'telephone' => $request->telephone,
            'executor' => $request->executor
        ]);

        return redirect()->route('requests');
    }
}
