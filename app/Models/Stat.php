<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    //MASS ASSIGNMENT
       protected $fillable = [
        'type',
        'duration',
        'points',
        'hearts',
        'image',
    ];

    // Relation: STATS - RECIPES
    public function Recipes() {
        return $this->hasMany('App\Models\Recipe');
    }
}
