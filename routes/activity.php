<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::resource('activity', ActivityController::class);
});

