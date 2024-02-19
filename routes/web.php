<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', ['as' => 'home', 'uses' => 'App\Http\Controllers\MainController@home']);
Route::post('/', ['as' => 'save', 'uses' => 'App\Http\Controllers\MainController@save']);
Route::get('/{bank}', ['as' => 'bank', 'uses' => 'App\Http\Controllers\MainController@bank']);
