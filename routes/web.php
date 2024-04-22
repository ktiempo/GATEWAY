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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//site 1
$router->get('/users1', 'User1Controller@index');
$router->post('/users1', 'User1Controller@add');
$router->get('/users1/{id}', 'User1Controller@show');
$router->put('/users1/{id}','User1Controller@update');
$router->patch('/users1/{id}','User1Controller@update');
$router->delete('/users1/{id}', 'User1Controller@delete'); 

//site 2
$router->get('/users2', 'User1Controller@index');
$router->post('/users2', 'User1Controller@add');
$router->get('/users2/{id}', 'User1Controller@show');
$router->put('/users2/{id}','User1Controller@update');
$router->patch('/users2/{id}','User1Controller@update');
$router->delete('/users2/{id}', 'User1Controller@delete'); 