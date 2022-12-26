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

    $comics= config('db.comics');
    return view('comics', compact('comics'));

})->name('comics');

Route::get('/dettaglio/{id}', function($id){

    $comics= config('db.comics');
    $comic_get = array_filter($comics, fn ($item) => $item['id'] == $id);
    $comic = $comic_get[array_key_first($comic_get)];


    // dump($id);
    // dump(array_key_first($comic_get));
    // dump($comic);


    // dd($comic_get);
    // $comics= config('db.comics');

    return view('comic_details', compact('comic'));

})->name('comic_details');

Route::get('/tv', function(){

    return view('tv');

})->name('tv');

Route::get('/personaggi', function(){

    return view('character');

})->name('character');

Route::get('/giochi', function(){

    return view('games');

})->name('games');

Route::get('/collettivo', function(){

    return view('collectibles');

})->name('collectibles');

Route::get('/video', function(){

    return view('videos');

})->name('videos');

Route::get('/fan', function(){

    return view('fans');

})->name('fans');

Route::get('/news', function(){

    return view('news');

})->name('news');
