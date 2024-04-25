<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/home', function () {
    return view('welcome');
});

Route::view('/', 'home');

Route::view('/cria-conta', 'cria-conta');

Route::view('testedeconteudo', 'teste');

Route::post('/salva-usuario', function (Request $request) {
    dd($request);
})->name('salva-usuario');


