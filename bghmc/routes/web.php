<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//-------------------------group controller----------------------------
Route::controller(App\Http\Controllers\patientsController::class)->group(function () {

    route::get('/list' , 'index');
    route::get('/Add-patients' , 'create');
    route::post('/Add-patients' , 'store');
    route::get('/edit-patients/{patients_id}' , 'edit');
    route::put('/update-patients/{patients_id}' , 'update');
    route::delete('/delete-patients/{patients_id}', 'destroy');
});


//------------------------------------------------------------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

