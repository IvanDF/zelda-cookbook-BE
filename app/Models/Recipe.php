<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //MASS ASSIGNMENT
       protected $fillable = [
        'stat_id',
        'name',
        'description',
        'image',
    ];

    // Relation: RECIPES - INGREDIENTS 
    public function Ingredients() {
        return $this->belongsToMany('App\Models\Ingredient');
    }

    // Relation: RECIPES - STATS
    public function Stats() {
        return $this->belongsTo('App\Models\Stat');
    }
}
