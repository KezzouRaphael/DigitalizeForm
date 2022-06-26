<?php

use \App\Http\Controllers\diagnosticController;
use \App\Http\Controllers\UPController;
use \App\Http\Controllers\theme1Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homePage');
});

Route::post('/validate', [UPController::class, 'store'])->name('validate');
Route::get('/diagnostic', [diagnosticController::class, 'diagnosticEnv'])->name('diagnostic');

Route::get('/themeone', [theme1Controller::class, 'show'])->name("themeone");
