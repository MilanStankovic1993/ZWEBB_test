<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stanica;
use App\Models\Linija;

class LinijaController extends Controller
{
    public function search(Request $request)
    {
        $od = $request->input('od');
        $do = $request->input('do');
        
        // Pronalaženje svih linija koje idu od od stanice do do stanice
        $linije = Linija::whereHas('odStanica', function ($query) use ($od) {
            $query->where('naziv', $od);
        })
        ->whereHas('doStanica', function ($query) use ($do) {
            $query->where('naziv', $do);
        })
        ->get();
        
        // Ako nema direktnih linija, proveri mogućnost presedanja
        if ($linije->isEmpty()) {
            $linije = $this->findConnections($od, $do);
        }

        return view('linije.index', compact('linije'));
    }

    public function findConnections($od, $do)
    {
        // Logika za presedanje (povezivanje linija)
        $linijeOd = Linija::whereHas('odStanica', function ($query) use ($od) {
            $query->where('naziv', $od);
        })->get();

        $linijeDo = Linija::whereHas('doStanica', function ($query) use ($do) {
            $query->where('naziv', $do);
        })->get();

        $presedanja = [];
        foreach ($linijeOd as $linijaOd) {
            foreach ($linijeDo as $linijaDo) {
                if ($linijaOd->do_stanica_id == $linijaDo->od_stanica_id) {
                    $presedanja[] = [
                        'first_leg' => $linijaOd,
                        'second_leg' => $linijaDo,
                    ];
                }
            }
        }

        return collect($presedanja);
    }
}
