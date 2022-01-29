<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            $recipes = new Recipe();
            $recipes->stat_id = $i;
            $recipes->name = "Ricetta ". $i;
            $recipes->description = "Descrizione ". $i;

            $recipes->save();
        }
    }
}
