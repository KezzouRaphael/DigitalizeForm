<?php

use \App\Http\Controllers\diagnosticController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homePage');
});


Route::get('/diagnostic', [diagnosticController::class, 'diagnosticEnv'])->name('diagnostic');
