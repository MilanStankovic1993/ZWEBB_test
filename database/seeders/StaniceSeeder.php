<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaniceSeeder extends Seeder
{
    public function run()
    {
        DB::table('stanice')->insert([
            ['name' => 'Kraljevo', 'location' => 'Kraljevo, Srbija'],
            ['name' => 'Vrnjacka banja', 'location' => 'Vrnjacka banja, Srbija'],
            ['name' => 'Krusevac', 'location' => 'Krusevac, Srbija'],
            ['name' => 'Trstenik', 'location' => 'Trstenik, Srbija'],
            ['name' => 'Kragujevac', 'location' => 'Kragujevac, Srbija'],
        ]);
    }
}
