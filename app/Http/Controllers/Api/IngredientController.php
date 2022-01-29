<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Searcging ingredients from DB
        $ingredients = DB::table('ingredients')
            ->select('ingredients.id', 'ingredients.name', 'ingredients.description')->get()->toArray();

        return response()->json($ingredients);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingredient = DB::table('ingredients')
            ->select('ingredients.id', 'ingredients.name', 'ingredients.description')
            ->where('ingredients.id', $id)
            ->get();

        return response()->json($ingredient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

 // Counting quantity of ingredients
 function count_array_values($my_array, $match) 
 { 
     $count = 0; 
     
     foreach ($my_array as $key => $value) 
     { 
         if ($value->id == $match) 
         { 
             $count++; 
         } 
     }
     
     return $count; 
 }

// Adding quantity value and remove duplicate objects
function my_array_unique($array, $keep_key_assoc = false){
    $duplicate_keys = array();
    $tmp = array();

    foreach ($array as $key => $val){
        // Adding quantity value ->
        $val->quantity = count_array_values($array, $val->id);

        // remove duplicate objects ->
        // convert objects to arrays, in_array() does not support objects
        if (is_object($val))
            $val = (array)$val;

        if (!in_array($val, $tmp))
            $tmp[] = $val;
        else
            $duplicate_keys[] = $key;
    }

    foreach ($duplicate_keys as $key)
        unset($array[$key]);

    return $keep_key_assoc ? $array : array_values($array);
}
