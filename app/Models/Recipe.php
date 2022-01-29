<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // Relazione del DB: RECIPES - INGREDIENTS 
    public function Ingredients() {
        return $this->belongsToMany('App\Models\Ingredient');
    }

    // Relazione del DB: RECIPES - STATS
    public function Stats() {
        return $this->belongsTo('App\Models\Stat');
    }
}
