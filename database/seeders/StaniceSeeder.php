<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaniceSeeder extends Seeder
{
    public function run()
    {
        $stanice = [
            ['naziv' => 'Niš'],
            ['naziv' => 'Aleksinac'],
            ['naziv' => 'Stalać'],
            ['naziv' => 'Ćićevac'],
            ['naziv' => 'Paraćin'],
            ['naziv' => 'Ćuprija'],
            ['naziv' => 'Jagodina'],
            ['naziv' => 'Lapovo'],
            ['naziv' => 'Velika Plana'],
            ['naziv' => 'Palanka'],
            ['naziv' => 'Mladenovac'],
            ['naziv' => 'Resnik'],
            ['naziv' => 'Rakovica'],
            ['naziv' => 'Beograd'],
        ];

        foreach ($stanice as $stanica) {
            DB::table('stanice')->updateOrInsert(
                ['naziv' => $stanica['naziv']],
                ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
