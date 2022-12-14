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
    $navList = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop',
    ];

    return view('homepage', ['listaNav' => $navList]);
})->name('header');


Route::get('/', function () {

    $fumetti = config('comics');

    return view('homepage', ['listaFumetti' => $fumetti]);
    
})->name('main');


