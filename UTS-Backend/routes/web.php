<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'BeritaController@index');

Route::get('/', function () {
    return view('welcome');
});
