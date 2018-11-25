<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//usuario
$router->get('user',  ['uses' => 'UserController@showAll']);
$router->get('user/{id}',  ['uses' => 'UserController@show']);
$router->post('user',  ['uses' => 'UserController@create']);
$router->put('user/{id}',  ['uses' => 'UserController@update']);
$router->delete('user/{id}',  ['uses' => 'UserController@destroy']);

//estabelecimento
$router->get('estabelecimento',  ['uses' => 'EstabelecimentoController@showAll']);
$router->get('estabelecimento/{id}',  ['uses' => 'EstabelecimentoController@show']);
$router->post('estabelecimento',  ['uses' => 'EstabelecimentoController@create']);
$router->put('estabelecimento/{id}',  ['uses' => 'EstabelecimentoController@update']);
$router->delete('estabelecimento/{id}',  ['uses' => 'EstabelecimentoController@destroy']);


//supermercado
$router->get('user',  ['uses' => 'UserController@showAll']);
$router->get('user/{id}',  ['uses' => 'UserController@show']);
$router->post('user',  ['uses' => 'UserController@create']);
$router->put('user/{id}',  ['uses' => 'UserController@update']);
$router->delete('user/{id}',  ['uses' => 'UserController@destroy']);

//comprador
$router->get('estabelecimento',  ['uses' => 'EstabelecimentoController@showAll']);
$router->get('estabelecimento/{id}',  ['uses' => 'EstabelecimentoController@show']);
$router->post('estabelecimento',  ['uses' => 'EstabelecimentoController@create']);
$router->put('estabelecimento/{id}',  ['uses' => 'EstabelecimentoController@update']);
$router->delete('estabelecimento/{id}',  ['uses' => 'EstabelecimentoController@destroy']);