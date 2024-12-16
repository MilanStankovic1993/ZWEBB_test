<?php

namespace App\Http\Controllers;

use App\Models\Linija;  // Model za linije
use App\Models\Stanica; // Model za stanice
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Preuzmi podatke sa forme
        $from = $request->input('from');
        $to = $request->input('to');

        // Nađi stanice na osnovu imena
        $fromStation = Stanica::where('name', $from)->first();
        $toStation = Stanica::where('name', $to)->first();

        // Ako su stanice pronađene
        if ($fromStation && $toStation) {
            // Pronađi linije koje povezuju te stanice
            $lines = Linija::where('od_stanica_id', $fromStation->id)
                         ->where('do_stanica_id', $toStation->id)
                         ->get();
        } else {
            $lines = collect(); // Ako stanice nisu pronađene, vrati praznu kolekciju
        }

        // Prosledi podatke u Blade šablon
        return view('search', compact('lines', 'from', 'to'));
    }
}
