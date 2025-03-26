<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;


Route::get('/1', function () {
    return view('welcome');
});

Route::resource('', InscriptionController::class);

//Route::get('connexion','InscriptionController@connexion')->name('connexion');

Route::resource('connexion', ConnexionController::class);