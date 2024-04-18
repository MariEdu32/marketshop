<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::view('/', 'home');

Route::view('/cria-conta', 'cria-conta');

Route::view('testedeconteudo', 'teste');
