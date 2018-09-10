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
    $url = url('redirecionamento');
    return view('welcome', compact('url'));
});

Route::get('/redirecionamento', function () {
    return view('site');
})->name('redirecionamento');

Route::get('/facebook', function (){
    return view('facebook');
})->name('facebook');

Route::get('/instagram', function (){
    return view('instagram');
})->name('instagram');

Route::resource('rede-social','RedeSocialController');