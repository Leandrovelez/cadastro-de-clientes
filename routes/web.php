<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::prefix('clientes')->name('clientes.')->group(function (){
    Route::get('/criar', 'App\Http\Controllers\ClienteController@criar')->name('criar');
    Route::get('/listar', 'App\Http\Controllers\ClienteController@listar')->name('listar');
    Route::post('/salvar', 'App\Http\Controllers\ClienteController@salvar')->name('salvar');
    Route::get('/visualizar/{id}', 'App\Http\Controllers\ClienteController@visualizar')->name('visualizar');
    Route::get('/editar/{id}', 'App\Http\Controllers\ClienteController@editar')->name('editar');
    Route::post('/atualizar', 'App\Http\Controllers\ClienteController@atualizar')->name('atualizar');
    Route::post('/deletar/{id}', 'App\Http\Controllers\ClienteController@deletar')->name('deletar');
});

