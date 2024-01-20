<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::resource('campaign/{campaign}/event', EventController::class);
});

