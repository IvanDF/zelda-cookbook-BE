<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    // Relazione del DB: STATS - RECIPES
    public function Recipes() {
        return $this->hasMany('App\Models\Recipe');
    }
}
