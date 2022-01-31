<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('/recipes', 'RecipeController@index');
    $router->get('/recipes/{id}', 'RecipeController@show');
    $router->post('/recipe', 'RecipeController@store');
    $router->get('/ingredients', 'IngredientController@index');
    $router->get('/ingredient/{id}', 'IngredientController@show');
    $router->get('/stats', 'StatController@index');
    $router->get('/stat/{id}', 'StatController@show');
});
