<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\diagnosticController;
use App\Http\Controllers\diagnosticController2;
use App\Http\Controllers\descriptionActivityController;
use \App\Http\Controllers\UPController;
use \App\Http\Controllers\theme1Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homePage');
});

Route::post('/validate', [UPController::class, 'store'])->name('validate');
Route::get('/diagnostic', [diagnosticController::class, 'diagnosticEnv'])->name('diagnostic');
Route::get('/diagnostic2', [diagnosticController2::class, 'diagnosticEnv2'])->name('diagnostic2');
Route::get('/descriptionActivity', [descriptionActivityController::class, 'descriptionActivityFunc'])->name('descriptionActivity');
Route::get('/themeone', [theme1Controller::class, 'show'])->name("themeone");

