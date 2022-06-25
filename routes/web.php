<?php

use \App\Http\Controllers\diagnosticController;





Route::get('/diagnostic', [diagnosticController::class, 'diagnosticEnv'])->name('diagnostic');
