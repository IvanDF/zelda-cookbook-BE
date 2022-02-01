<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientRecipeTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ingredient_recipe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recipe_id');
            $table->unsignedBigInteger('ingredient_id');

            //Relation: RECIPE - INGREDIENT
            $table->foreign('recipe_id')
            ->references('id')
            ->on('recipes')
            ->onDelete('cascade');

            //Relation: INGREDIENT - RECIPE
            $table->foreign('ingredient_id')
            ->references('id')
            ->on('ingredients')
            ->onDelete('cascade');
        });
    }
        
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('recipe_ingredient');
    }
}
