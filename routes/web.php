<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/a', ActivityController::class);
Route::get('/dashboard', function (Request $request) {

    $campaign_count=$request->user()->campaigns()->count();
    $audience_count=$request->user()->audiences()->count();
    $event_count=$request->user()->events()->count();
    $activity_count=$request->user()->activities()->count();

    return view('dashboard',
    ['user' => $request->user(),
     'campaigns_count'=>$campaign_count,
     'audiences_count'=>$audience_count,
     'events_count'=>$event_count,
     'activities_count'=>$activity_count
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/campaign.php';
require __DIR__.'/audience.php';
require __DIR__.'/event.php';
require __DIR__.'/recomendation.php';
