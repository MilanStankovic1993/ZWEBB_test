<?php

namespace App\Http\Controllers;

use App\Models\Stanica;
use Illuminate\Http\Request;

class StanicaController extends Controller
{
    /**
     * Display a list of all stations.
     *
     * This method retrieves all stations from the database and maps them
     * into a desired format before passing them to the view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve all stations from the database
        $stanice = Stanica::all();

        // Map the stations into the desired format
        $rezultat = $stanice->map(function ($stanica) {
            return [
                'id' => $stanica->id,
                'name' => $stanica->naziv,
            ];
        });

        // Pass the formatted stations to the 'welcome' view
        return view('welcome', ['stations' => $rezultat]);
    }

    /**
     * Search for lines between two stations.
     *
     * This method handles the search request by retrieving lines that
     * connect the given 'from_station' and 'to_station', filtering them
     * based on the user's input, and returning the results in JSON format.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request)
    {
        // Get the user input for the 'from_station' and 'to_station'
        $from = $request->input('from_station');
        $to = $request->input('to_station');

        // Retrieve all line data from the database, including the stations' names
        $linije = \DB::table('linije')
            ->join('stanice as od_stanice', 'linije.od_stanice_id', '=', 'od_stanice.id')
            ->join('stanice as do_stanice', 'linije.do_stanice_id', '=', 'do_stanice.id')
            ->select(
                'linije.id',
                'linije.naziv_linije',
                'od_stanice.naziv as od_stanice_naziv',
                'do_stanice.naziv as do_stanice_naziv',
                'linije.vreme_polaska',
                'linije.vreme_dolaska',
                'linije.od_stanice_id',
                'linije.do_stanice_id'
            )
            ->orderBy('linije.naziv_linije')
            ->get()
            ->toArray();

        // Filter lines based on the selected 'from_station' and 'to_station'
        $filtriraneLinije = array_filter($linije, function ($linija) use ($from, $to) {
            return $linija->od_stanice_id >= $from && $linija->do_stanice_id <= $to;
        });

        // If no lines are found, return a message indicating no available lines
        if (empty($filtriraneLinije)) {
            return response()->json(['message' => 'Nema dostupnih linija za odabrane stanice.']);
        }

        // Group the filtered lines by the line name using array_reduce
        $grupisaneLinije = array_reduce($filtriraneLinije, function ($grupe, $linija) {
            $grupe[$linija->naziv_linije][] = $linija;
            return $grupe;
        }, []);

        // Return the grouped lines in JSON format
        return response()->json($grupisaneLinije);
    }

}
