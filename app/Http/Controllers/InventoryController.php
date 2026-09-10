<?php

namespace App\Http\Controllers;

use App\Models\Cartridge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function create()
    {
        $cartridges = DB::table('cartridges')->latest()->take(20)->get();
        return view("inventory")->with('cartridges', $cartridges);
    }

    public function newCartridge()
    {
        $subdivisions = DB::table('subdivisions')->get();
        $cartridge_names = DB::table('cartridge_names')->get();
        return view("new_cartridge")->with('subdivisions', $subdivisions)->with('cartridge_names', $cartridge_names);
    }

    public function store(Request $request)
    {
        $request->validate([
            'subdivision' => ['required', 'string'],
            'surname_name' => ['required', 'string'],
            'cartridge_name' => ['required', 'string'],
            'number_of_pieces' => ['required', 'string']
        ]);

        Cartridge::create([
            'subdivision' => $request->subdivision,
            'surname_name' => $request->surname_name,
            'cartridge_name' => $request->cartridge_name,
            'inventory_number' => $request->inventory_number,
            'number_of_pieces' => $request->number_of_pieces
        ]);

        return redirect()->route('inventory');
    }
}
