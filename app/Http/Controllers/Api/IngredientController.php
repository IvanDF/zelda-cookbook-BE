<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Searcging ingredients from DB
        $ingredients = DB::table('ingredients')
            ->select('ingredients.id', 'ingredients.name', 'ingredients.description', 'image')->get()->toArray();

        return response()->json($ingredients);
 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        /************************************************
         * DA AGGIUNGERE IL CHECK "ESISTE GIÀ"
        ************************************************/

        $data = $request->all();

        // Initialize Ingredient model & set table cells
        $newIngredient = new Ingredient;
        $newIngredient->name = $data['name'];
        $newIngredient->description = $data['description'];
        $newIngredient->image = $data['image'];

        
        // Sae to DB
        $newIngredient->save();

        return "success";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ingredient = DB::table('ingredients')
            ->select('ingredients.id', 'ingredients.name', 'ingredients.description', 'ingredients.image')
            ->where('ingredients.id', $id)
            ->get();

        return response()->json($ingredient);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $ingredient_id)
    {
        $data = $request->all();

        $ingredient = Ingredient::find($ingredient_id);
        $ingredient->update($data);

        return "success";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ingredient_id)
    {
        $ingredient = Ingredient::find($ingredient_id);
        $ingredient->delete();

        return "success";
    }
}