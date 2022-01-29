<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    // Relazione del DB: INGREDIENT - RECIPE
    public function Recipes() {
        return $this->belongsToMany('App\Models\Recipe');
    }
}
