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


Route::resource('trainers', 'TrainerControler');
Route::resource('usuario', 'UsuarioController');
Route::resource('evaluador', 'EvaluadorController');
Route::resource('evaluacion', 'EvaluacionController');
Route::resource('comision', 'ComisionController');