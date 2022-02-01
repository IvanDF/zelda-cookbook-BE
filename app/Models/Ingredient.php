<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //MASS ASSIGNMENT
    protected $fillable = [
        'name',
        'description',
    ];

    // Relazione del DB: INGREDIENT - RECIPE
    public function Recipes() {
        return $this->belongsToMany('App\Models\Recipe');
    }
}
