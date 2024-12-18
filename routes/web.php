<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StanicaController;

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

// Home route that directs to the 'index' method of the StanicaController
// The route is named 'pregled' for easy reference in views or other parts of the application.
Route::get('/', [StanicaController::class, 'index'])->name('pregled');

// Search route that handles POST requests for searching stations
// It invokes the 'search' method in the StanicaController to process the request.
Route::post('/search', [StanicaController::class, 'search']);

