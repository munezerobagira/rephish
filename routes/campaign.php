<?php

use App\Http\Controllers\CampaignController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::middleware('auth')->group(function () {
    Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaign.index');
    Route::get('/campaigns/create', [CampaignController::class, 'create'])->name('campaign.create');
    Route::post('/campaigns', [CampaignController::class, 'store'])->name('campaign.store');
    Route::patch('/campaigns/{campaign}', [CampaignController::class, 'edit'])->name('campaign.edit');
    Route::delete('/campaigns/{campaign}', [CampaignController::class, 'destroy'])->name('campaign.destroy');
    Route::get('/campaigns/{campaign}', [CampaignController::class, 'show'])->name('campaign.show');
});


