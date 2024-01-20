<?php

use App\Http\Controllers\RecomendationController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::resource('recomendation', RecomendationController::class);
});



