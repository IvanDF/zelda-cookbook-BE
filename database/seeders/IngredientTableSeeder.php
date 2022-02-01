<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            $ingredients = new Ingredient();
            $ingredients->name = "Ingrediente ". $i;
            $ingredients->description = "Descrizione ". $i;
            
            $ingredients->save();
        }
    }
}
