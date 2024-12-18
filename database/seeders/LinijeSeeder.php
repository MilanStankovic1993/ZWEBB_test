<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinijeSeeder extends Seeder
{
    public function run()
    {
        $linije = [
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 1,  // ID za "Niš"
                'do_stanice_id' => 2,  // ID za "Aleksinac"
                'polazak' => '05:00',
                'dolazak' => '05:28',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 2,  // ID za "Aleksinac"
                'do_stanice_id' => 3,  // ID za "Stalać"
                'polazak' => '05:29',
                'dolazak' => '06:15',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 3,  // ID za "Stalać"
                'do_stanice_id' => 4,  // ID za "Ćićevac"
                'polazak' => '06:16',
                'dolazak' => '06:25',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 4,  // ID za "Ćićevac"
                'do_stanice_id' => 5,  // ID za "Paraćin"
                'polazak' => '06:26',
                'dolazak' => '06:46',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 5,  // ID za "Paraćin"
                'do_stanice_id' => 6,  // ID za "Ćuprija"
                'polazak' => '06:47',
                'dolazak' => '06:54',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 6,  // ID za "Ćuprija"
                'do_stanice_id' => 7,  // ID za "Jagodina"
                'polazak' => '06:55',
                'dolazak' => '07:05',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 7,  // ID za "Jagodina"
                'do_stanice_id' => 8,  // ID za "Lapovo"
                'polazak' => '07:06',
                'dolazak' => '07:38',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 8,  // ID za "Lapovo"
                'do_stanice_id' => 9,  // ID za "Velika Plana"
                'polazak' => '07:39',
                'dolazak' => '08:13',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 9,  // ID za "Velika Plana"
                'do_stanice_id' => 10, // ID za "Palanka"
                'polazak' => '08:14',
                'dolazak' => '08:23',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 10, // ID za "Palanka"
                'do_stanice_id' => 11, // ID za "Mladenovac"
                'polazak' => '08:24',
                'dolazak' => '08:44',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 11, // ID za "Mladenovac"
                'do_stanice_id' => 12, // ID za "Resnik"
                'polazak' => '08:45',
                'dolazak' => '09:50',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 12, // ID za "Resnik"
                'do_stanice_id' => 13, // ID za "Rakovica"
                'polazak' => '09:51',
                'dolazak' => '10:25',
            ],
            [
                'naziv_linije' => 'Linija 1',
                'od_stanice_id' => 13, // ID za "Rakovica"
                'do_stanice_id' => 14, // ID za "Beograd"
                'polazak' => '10:26',
                'dolazak' => '10:55',
            ],
            // Linija 2
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 1,  // ID za "Niš"
                'do_stanice_id' => 2,  // ID za "Aleksinac"
                'polazak' => '15:00',
                'dolazak' => '15:28',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 2,  // ID za "Aleksinac"
                'do_stanice_id' => 3,  // ID za "Stalać"
                'polazak' => '15:29',
                'dolazak' => '16:15',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 3,  // ID za "Stalać"
                'do_stanice_id' => 4,  // ID za "Ćićevac"
                'polazak' => '16:16',
                'dolazak' => '16:25',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 4,  // ID za "Ćićevac"
                'do_stanice_id' => 5,  // ID za "Paraćin"
                'polazak' => '16:26',
                'dolazak' => '16:46',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 5,  // ID za "Paraćin"
                'do_stanice_id' => 6,  // ID za "Ćuprija"
                'polazak' => '16:47',
                'dolazak' => '16:54',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 6,  // ID za "Ćuprija"
                'do_stanice_id' => 7,  // ID za "Jagodina"
                'polazak' => '16:55',
                'dolazak' => '17:05',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 7,  // ID za "Jagodina"
                'do_stanice_id' => 8,  // ID za "Lapovo"
                'polazak' => '17:06',
                'dolazak' => '17:38',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 8,  // ID za "Lapovo"
                'do_stanice_id' => 9,  // ID za "Velika Plana"
                'polazak' => '17:39',
                'dolazak' => '18:13',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 9,  // ID za "Velika Plana"
                'do_stanice_id' => 10, // ID za "Palanka"
                'polazak' => '18:14',
                'dolazak' => '18:23',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 10, // ID za "Palanka"
                'do_stanice_id' => 11, // ID za "Mladenovac"
                'polazak' => '18:24',
                'dolazak' => '18:44',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 11, // ID za "Mladenovac"
                'do_stanice_id' => 12, // ID za "Resnik"
                'polazak' => '18:45',
                'dolazak' => '19:50',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 12, // ID za "Resnik"
                'do_stanice_id' => 13, // ID za "Rakovica"
                'polazak' => '19:51',
                'dolazak' => '20:25',
            ],
            [
                'naziv_linije' => 'Linija 2',
                'od_stanice_id' => 13, // ID za "Rakovica"
                'do_stanice_id' => 14, // ID za "Beograd"
                'polazak' => '20:26',
                'dolazak' => '20:55',
            ]
        ];

        foreach ($linije as $linija) {
            if (isset($linija['od_stanice_id']) && isset($linija['do_stanice_id'])) {
                DB::table('linije')->insert([
                    'naziv_linije' => $linija['naziv_linije'],
                    'od_stanice_id' => $linija['od_stanice_id'],
                    'do_stanice_id' => $linija['do_stanice_id'],
                    'vreme_polaska' => $linija['polazak'],
                    'vreme_dolaska' => $linija['dolazak'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                echo "Greška: Nedostaje od_stanica_id ili do_stanica_id za liniju\n";
            }
        }
    }
}
