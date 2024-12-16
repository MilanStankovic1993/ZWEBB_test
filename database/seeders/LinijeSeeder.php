<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinijeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dodaj testne linije
        DB::table('linije')->insert([
            ['od_stanica_id' => 1, 'do_stanica_id' => 2, 'departure_time' => '08:00:00', 'arrival_time' => '09:00:00'],
            ['od_stanica_id' => 2, 'do_stanica_id' => 3, 'departure_time' => '09:30:00', 'arrival_time' => '10:30:00'],
            ['od_stanica_id' => 3, 'do_stanica_id' => 4, 'departure_time' => '11:00:00', 'arrival_time' => '12:00:00'],
            ['od_stanica_id' => 4, 'do_stanica_id' => 5, 'departure_time' => '12:30:00', 'arrival_time' => '13:30:00'],
        ]);
    }
}
