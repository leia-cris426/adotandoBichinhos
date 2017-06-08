<?php

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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('api/user','UserController@index');
 
$app->get('api/user/{id}','UserController@getUser');
 
$app->post('api/user','UserController@saveUser');
 
$app->put('api/user/{id}','UserController@updateUser');
 
$app->delete('api/user/{id}','UserController@deleteUser');


$app->get('api/animal','AnimalController@index');
 
$app->get('api/animal/{id}','AnimalController@getAnimal');
 
$app->post('api/animal','AnimalController@saveAnimal');
 
$app->put('api/animal/{id}','AnimalController@updateAnimal');
 
$app->delete('api/animal/{id}','AnimalController@deleteAnimal');
