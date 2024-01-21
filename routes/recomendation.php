<?php

use App\Http\Controllers\RecomendationController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('recomendation', [RecomendationController::class, 'index'])->name('recomendation.index');
});
Route::group(['middleware' => ['auth', 'is_admin'], ], function () {
    Route::get('recomendation/create', [RecomendationController::class, 'create'])->name('recomendation.create');
    Route::post('recomendation', [RecomendationController::class, 'store'])->name('recomendation.store');
    Route::get('recomendation/{recomendation}', [RecomendationController::class, 'show'])->name('recomendation.show');
    Route::get('recomendation/{recomendation}/edit', [RecomendationController::class, 'edit'])->name('recomendation.edit');
    Route::put('recomendation/{recomendation}', [RecomendationController::class, 'update'])->name('recomendation.update');
    Route::delete('recomendation/{recomendation}', [RecomendationController::class, 'destroy'])->name('recomendation.destroy');
});


