<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinijeSeeder extends Seeder
{
    public function run()
    {
        $linije = [
            // Smer Nis -> Beograd
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 1,  // ID za "Niš"
                'do_stanice_id' => 2,  // ID za "Aleksinac"
                'polazak' => '05:00',
                'dolazak' => '05:28',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 2,  // ID za "Aleksinac"
                'do_stanice_id' => 3,  // ID za "Stalać"
                'polazak' => '05:29',
                'dolazak' => '06:15',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 3,  // ID za "Stalać"
                'do_stanice_id' => 4,  // ID za "Ćićevac"
                'polazak' => '06:16',
                'dolazak' => '06:25',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 4,  // ID za "Ćićevac"
                'do_stanice_id' => 5,  // ID za "Paraćin"
                'polazak' => '06:26',
                'dolazak' => '06:46',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 5,  // ID za "Paraćin"
                'do_stanice_id' => 6,  // ID za "Ćuprija"
                'polazak' => '06:47',
                'dolazak' => '06:54',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 6,  // ID za "Ćuprija"
                'do_stanice_id' => 7,  // ID za "Jagodina"
                'polazak' => '06:55',
                'dolazak' => '07:05',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 7,  // ID za "Jagodina"
                'do_stanice_id' => 8,  // ID za "Lapovo"
                'polazak' => '07:06',
                'dolazak' => '07:38',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 8,  // ID za "Lapovo"
                'do_stanice_id' => 9,  // ID za "Velika Plana"
                'polazak' => '07:39',
                'dolazak' => '08:13',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 9,  // ID za "Velika Plana"
                'do_stanice_id' => 10, // ID za "Palanka"
                'polazak' => '08:14',
                'dolazak' => '08:23',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 10, // ID za "Palanka"
                'do_stanice_id' => 11, // ID za "Mladenovac"
                'polazak' => '08:24',
                'dolazak' => '08:44',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 11, // ID za "Mladenovac"
                'do_stanice_id' => 12, // ID za "Resnik"
                'polazak' => '08:45',
                'dolazak' => '09:50',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 12, // ID za "Resnik"
                'do_stanice_id' => 13, // ID za "Rakovica"
                'polazak' => '09:51',
                'dolazak' => '10:25',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 13, // ID za "Rakovica"
                'do_stanice_id' => 14, // ID za "Beograd"
                'polazak' => '10:26',
                'dolazak' => '10:55',
            ],
            // Smer Beograd -> Nis 
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 14,  // ID za "Beograd"
                'do_stanice_id' => 13,  // ID za "Rakovica"
                'polazak' => '11:00',
                'dolazak' => '11:30',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 13,  // ID za "Rakovica"
                'do_stanice_id' => 12,  // ID za "Resnik"
                'polazak' => '11:31',
                'dolazak' => '12:05',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 12,  // ID za "Resnik"
                'do_stanice_id' => 11,  // ID za "Mladenovac"
                'polazak' => '12:06',
                'dolazak' => '13:10',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 11,  // ID za "Mladenovac"
                'do_stanice_id' => 10,  // ID za "Palanka"
                'polazak' => '13:11',
                'dolazak' => '13:31',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 10,  // ID za "Palanka"
                'do_stanice_id' => 9,   // ID za "Velika Plana"
                'polazak' => '13:32',
                'dolazak' => '13:41',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 9,   // ID za "Velika Plana"
                'do_stanice_id' => 8,   // ID za "Lapovo"
                'polazak' => '13:42',
                'dolazak' => '14:16',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 8,   // ID za "Lapovo"
                'do_stanice_id' => 7,   // ID za "Jagodina"
                'polazak' => '14:17',
                'dolazak' => '14:49',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 7,   // ID za "Jagodina"
                'do_stanice_id' => 6,   // ID za "Ćuprija"
                'polazak' => '14:50',
                'dolazak' => '15:00',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 6,   // ID za "Ćuprija"
                'do_stanice_id' => 5,   // ID za "Paraćin"
                'polazak' => '15:01',
                'dolazak' => '15:08',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 5,   // ID za "Paraćin"
                'do_stanice_id' => 4,   // ID za "Ćićevac"
                'polazak' => '15:09',
                'dolazak' => '15:29',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 4,   // ID za "Ćićevac"
                'do_stanice_id' => 3,   // ID za "Stalać"
                'polazak' => '15:30',
                'dolazak' => '15:39',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 3,   // ID za "Stalać"
                'do_stanice_id' => 2,   // ID za "Aleksinac"
                'polazak' => '15:40',
                'dolazak' => '16:26',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 609',
                'od_stanice_id' => 2,   // ID za "Aleksinac"
                'do_stanice_id' => 1,   // ID za "Niš"
                'polazak' => '16:27',
                'dolazak' => '16:55',
            ],
            // Nis -> Beograd
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 1,  // ID za "Niš"
                'do_stanice_id' => 2,  // ID za "Aleksinac"
                'polazak' => '15:00',
                'dolazak' => '15:28',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 2,  // ID za "Aleksinac"
                'do_stanice_id' => 3,  // ID za "Stalać"
                'polazak' => '15:29',
                'dolazak' => '16:15',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 3,  // ID za "Stalać"
                'do_stanice_id' => 4,  // ID za "Ćićevac"
                'polazak' => '16:16',
                'dolazak' => '16:25',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 4,  // ID za "Ćićevac"
                'do_stanice_id' => 5,  // ID za "Paraćin"
                'polazak' => '16:26',
                'dolazak' => '16:46',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 5,  // ID za "Paraćin"
                'do_stanice_id' => 6,  // ID za "Ćuprija"
                'polazak' => '16:47',
                'dolazak' => '16:54',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 6,  // ID za "Ćuprija"
                'do_stanice_id' => 7,  // ID za "Jagodina"
                'polazak' => '16:55',
                'dolazak' => '17:05',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 7,  // ID za "Jagodina"
                'do_stanice_id' => 8,  // ID za "Lapovo"
                'polazak' => '17:06',
                'dolazak' => '17:38',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 8,  // ID za "Lapovo"
                'do_stanice_id' => 9,  // ID za "Velika Plana"
                'polazak' => '17:39',
                'dolazak' => '18:13',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 9,  // ID za "Velika Plana"
                'do_stanice_id' => 10, // ID za "Palanka"
                'polazak' => '18:14',
                'dolazak' => '18:23',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 10, // ID za "Palanka"
                'do_stanice_id' => 11, // ID za "Mladenovac"
                'polazak' => '18:24',
                'dolazak' => '18:44',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 11, // ID za "Mladenovac"
                'do_stanice_id' => 12, // ID za "Resnik"
                'polazak' => '18:45',
                'dolazak' => '19:50',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 12, // ID za "Resnik"
                'do_stanice_id' => 13, // ID za "Rakovica"
                'polazak' => '19:51',
                'dolazak' => '20:25',
            ],
            [
                'smer_putovanja' => 0,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 13, // ID za "Rakovica"
                'do_stanice_id' => 14, // ID za "Beograd"
                'polazak' => '20:26',
                'dolazak' => '20:55',
            ],
            // Smer Beograd -> Nis
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 14, // ID za "Beograd"
                'do_stanice_id' => 13, // ID za "Rakovica"
                'polazak' => '06:00',
                'dolazak' => '06:30',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 13, // ID za "Rakovica"
                'do_stanice_id' => 12, // ID za "Resnik"
                'polazak' => '06:31',
                'dolazak' => '07:05',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 12, // ID za "Resnik"
                'do_stanice_id' => 11, // ID za "Mladenovac"
                'polazak' => '07:06',
                'dolazak' => '08:10',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 11, // ID za "Mladenovac"
                'do_stanice_id' => 10, // ID za "Palanka"
                'polazak' => '08:11',
                'dolazak' => '08:31',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 10, // ID za "Palanka"
                'do_stanice_id' => 9,  // ID za "Velika Plana"
                'polazak' => '08:32',
                'dolazak' => '08:41',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 9,  // ID za "Velika Plana"
                'do_stanice_id' => 8,  // ID za "Lapovo"
                'polazak' => '08:42',
                'dolazak' => '09:16',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 8,  // ID za "Lapovo"
                'do_stanice_id' => 7,  // ID za "Jagodina"
                'polazak' => '09:17',
                'dolazak' => '09:49',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 7,  // ID za "Jagodina"
                'do_stanice_id' => 6,  // ID za "Ćuprija"
                'polazak' => '09:50',
                'dolazak' => '10:00',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 6,  // ID za "Ćuprija"
                'do_stanice_id' => 5,  // ID za "Paraćin"
                'polazak' => '10:01',
                'dolazak' => '10:08',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 5,  // ID za "Paraćin"
                'do_stanice_id' => 4,  // ID za "Ćićevac"
                'polazak' => '10:09',
                'dolazak' => '10:29',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 4,  // ID za "Ćićevac"
                'do_stanice_id' => 3,  // ID za "Stalać"
                'polazak' => '10:30',
                'dolazak' => '10:39',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 3,  // ID za "Stalać"
                'do_stanice_id' => 2,  // ID za "Aleksinac"
                'polazak' => '10:40',
                'dolazak' => '11:26',
            ],
            [
                'smer_putovanja' => 1,
                'naziv_linije' => 'Voz 709',
                'od_stanice_id' => 2,  // ID za "Aleksinac"
                'do_stanice_id' => 1,  // ID za "Niš"
                'polazak' => '11:27',
                'dolazak' => '11:55',
            ]
        ];

        foreach ($linije as $linija) {
            if (isset($linija['od_stanice_id']) && isset($linija['do_stanice_id'])) {
                DB::table('linije')->insert([
                    'smer_putovanja' => $linija['smer_putovanja'],
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
