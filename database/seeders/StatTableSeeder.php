<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stat;

class StatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            $stats = new Stat();
            $stats->type = "Tipo ". $i;
            $stats->points = 1;
            $stats->duration = 00.00;

            $stats->save();
        }
    }
}
