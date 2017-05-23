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

$app->get('usuarios', function ($id = null) {

    if (!$id) {
        return 'Sem id';
    }
    return 'User ' . $id;
});

$app->get('animais[/{id}]', function ($id = null) {

    if (!$id) {
        return 'Sem id';
    }
    return 'User ' . $id;
});

$app->post('user[/{id}]', function ($id = null) {

    if (!$id) {
        return 'Sem id';
    }
    return 'User ' . $id;
});
