<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/Berita', [BeritaController::class, 'index']);
Route::post('/Berita', [BeritaController::class, 'store']);
Route::get('/Berita/{id}', [BeritaController::class, 'show']);
Route::put('/Berita/{id}', [BeritaController::class, 'update']);
Route::delete('/Berita/{id}', [BeritaController::class, 'destroy']);
Route::patch('/Berita/{id}', [BeritaController::class, 'partialUpdate']);
Route::get('/Berita/search/{id}', [BeritaController::class, 'search']);
Route::get('/Berita/category/{category}', [BeritaController::class, 'getByCategory']);