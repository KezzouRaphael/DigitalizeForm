<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\diagnosticController;
use \App\Http\Controllers\modalitesApplicationController;
use App\Http\Controllers\diagnosticController2;
use App\Http\Controllers\descriptionActivityController;


Route::get('/', function () {
    return view('homePage');
});




Route::get('/diagnostic', [diagnosticController::class, 'diagnosticEnv'])->name('diagnostic');
Route::get('/modalitesApplication', [modalitesApplicationController::class, 'modalitesApplication'])->name('modalitesApplication');


Route::get('/diagnostic2', [diagnosticController2::class, 'diagnosticEnv2'])->name('diagnostic2');

Route::get('/descriptionActivity', [descriptionActivityController::class, 'descriptionActivityFunc'])->name('descriptionActivity');

