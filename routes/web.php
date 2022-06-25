<?php

use \App\Http\Controllers\diagnosticController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\modalitesApplicationController;


Route::get('/', function () {
    return view('homePage');
});




Route::get('/diagnostic', [diagnosticController::class, 'diagnosticEnv'])->name('diagnostic');
Route::get('/modalitesApplication', [modalitesApplicationController::class, 'modalitesApplication'])->name('modalitesApplication');


