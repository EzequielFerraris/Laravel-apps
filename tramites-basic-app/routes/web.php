<?php

use App\Http\Controllers\SectorController;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\TipoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('home');})
        ->name('home');

Route::get('/tramites_home', function () {return view('tramites.tramite_home');})
        ->name('tramites.home');

Route::resource('tramites', TramiteController::class);

Route::get('/tramite_buscar', function () {return view('tramites.tramite_buscar');})
        ->name('tramites.buscar');

Route::get('/tramite_resultados', [TramiteController::class, 'search'])->name('tramites.search');


Route::get('/tipos_home', function () {return view('tipos.tipo_home');})
        ->name('tipos.home');

Route::resource('tipos', TipoController::class);

Route::resource('sectores', SectorController::class);