<?php

use App\Http\Controllers\AudienceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::middleware('auth')->group(function () {
    Route::resource('campaign/{campaign}/audience', AudienceController::class);
});

