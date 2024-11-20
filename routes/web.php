<?php

use App\Http\Controllers\CalculatriceController;

Route::get('/', [CalculatriceController::class, 'afficherSite']); 
Route::post('/calculer', [CalculatriceController::class, 'calculer'])->name('calculer');

