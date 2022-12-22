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
    return view('home');
})->name('home');

Route::get('/film', function(){

    return view('movies');

})->name('movies');

Route::get('/fumetti', function(){

    return view('comics');

})->name('comics');

Route::get('/tv', function(){

    return view('tv');

})->name('tv');

Route::get('/personaggi', function(){

    return view('character');

})->name('character');
