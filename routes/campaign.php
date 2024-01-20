<?php

use App\Http\Controllers\CampaignController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::resource('campaign', CampaignController::class);
});



