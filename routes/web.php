<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreenhouseController;

// Route for the welcome page (optional, you may want to keep it)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return response()->file(public_path('css/styles.css'));
});

// Routes for the greenhouse application
Route::get('/', [GreenhouseController::class, 'index'])->name('home');
Route::get('/monitor', [GreenhouseController::class, 'monitor'])->name('monitor');
Route::get('/control', [GreenhouseController::class, 'showControl'])->name('control'); // This shows the control form
Route::post('/control', [GreenhouseController::class, 'control']); // This processes the form submission