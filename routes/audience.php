<?php

use App\Http\Controllers\AudienceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::middleware('auth')->group(function () {
    Route::get('/{campaign}/audience', [AudienceController::class, 'index'])->name('audience.index');
    Route::get('/{campaign}/audience/create', [AudienceController::class, 'create'])->name('audience.create');
    Route::post('/{campaign}/audience', [AudienceController::class, 'store'])->name('audience.store');
    Route::patch('/{campaign}/audience/{campaign}', [AudienceController::class, 'edit'])->name('audience.edit');
    Route::delete('/{campaign}/audience/{campaign}', [AudienceController::class, 'destroy'])->name('audience.destroy');
});

