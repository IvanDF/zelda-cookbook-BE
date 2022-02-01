<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('/recipes', 'RecipeController@index');
    $router->get('/recipe/{id}', 'RecipeController@show');
    $router->post('/recipe', 'RecipeController@store');
    $router->patch('/recipe/{recipe_id}', 'RecipeController@update');
    $router->delete('/recipe/{recipe_id}', 'RecipeController@destroy');
    
    $router->get('/ingredients', 'IngredientController@index');
    $router->get('/ingredient/{id}', 'IngredientController@show');
    $router->post('/ingredient', 'IngredientController@store');
    $router->patch('/ingredient/{ingredient_id}', 'IngredientController@update');
    $router->delete('/ingredient/{ingredient_id}', 'IngredientController@destroy');
    
    $router->get('/stats', 'StatController@index');
    $router->get('/stat/{id}', 'StatController@show');
    $router->post('/stat', 'StatController@store');
    $router->patch('/stat/{stat_id}', 'StatController@update');
    $router->delete('/stat/{stat_id}', 'StatController@destroy');
});
