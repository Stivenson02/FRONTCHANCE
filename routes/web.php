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

use GuzzleHttp\Client;

Route::get('/', function () {
    return view('welcome');
});

Route::get('usuario/{id}', [
  'uses' => 'ConsumoController@userdate',
  'as' => 'usuario_paht'
]);


Route::post('consulta', [
  'uses' => 'ConsumoController@consuluser',
  'as' => 'consulta_paht'
]);

Route::post('nuevo_usuario', [
  'uses' => 'ConsumoController@isert_user',
  'as' => 'nuevo_usuario_paht'
]);

Route::post('nuevo_chance', [
  'uses' => 'ConsumoController@isert_chace',
  'as' => 'nuevo_chance_paht'
]);

Route::get('allusuarios', [
  'uses' => 'ConsumoController@todosusuario',
  'as' => 'allusuarios_paht'
]);

