<?php

use \App\Http\Controllers\diagnosticController;


Route::get('/', function () {
    return view('homePage');
});


Route::get('/diagnostic', [diagnosticController::class, 'diagnosticEnv'])->name('diagnostic');

