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
    return view('welcome');
});

Route::get('/primeira-view', 'App\Http\Controllers\NavigationController@index');

Route::get('/soma/{num1}/{num2}', 'App\Http\Controllers\CalculatorController@sum') 
    ->where('num1', '[0-9]+')->where('num2', '[0-9]+');

Route::get('/subtracao/{num1}/{num2}', 'App\Http\Controllers\CalculatorController@subtraction') 
    ->where('num1', '[0-9]+')->where('num2', '[0-9]+');

Route::get('/divisao/{num1}/{num2}', 'App\Http\Controllers\CalculatorController@division') 
    ->where('num1', '[0-9]+')->where('num2', '[0-9]+');

Route::get('/multiplicacao/{num1}/{num2}', 'App\Http\Controllers\CalculatorController@multiplication') 
    ->where('num1', '[0-9]+')->where('num2', '[0-9]+');