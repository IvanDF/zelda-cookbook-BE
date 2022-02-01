<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stat;

class StatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i=1; $i < 6; $i++) { 
            $stats = new Stat();
            $stats->type = "Tipo ". $i;
            $stats->points = 1;
            $stats->duration = 00.00;
            $stats->hearts = $i;

            $stats->save();
        }
    }
}
