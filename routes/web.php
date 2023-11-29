<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanitiaController;


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "image" => "avatar.png"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "head" => "About Me",
        "name" => "Zahsey",

    ]);
});


Route::get('/pricing', function() {
    return view ('pricing', [
        "title" => "Pricing",
        "head" => "Our Price"
    ]);
});

Route::get('/panitia', function() {
    return view ('panitia', [
        "title" => "Panitia"
    ]);
});


Route::get('/panitia', [PanitiaController::class, 'index']);
Route::get('/panitia_tambah', [PanitiaController::class, 'tambah']);
Route::post('/panitia/store', [PanitiaController::class, 'store']);
Route::get('panitia/edit/{id}', [PanitiaController::class, 'edit']);
Route::put('panitia/update/{id}', [PanitiaController::class, 'update']);
Route::get('panitia/hapus/{id}', [PanitiaController::class, 'delete']);
