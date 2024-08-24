<?php

use App\Http\Controllers\TramiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('home');})
        ->name('home');

Route::get('/tramite_home', function () {return view('tramites.tramite_home');})
        ->name('tramite_home');

Route::resource('tramites', TramiteController::class);
