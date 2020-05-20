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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::post('/registre/new', 'ControllerFramework@store');
Route::get('/list',  'ControllerFramework@index');
Route::get('/registre',  'ControllerFramework@create');
Route::get('/show/{id}', 'ControllerFramework@show');

