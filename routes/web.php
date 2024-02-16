<?php

use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

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

Route::get('experience/index', [ExperiencesController::class, 'index'])->name('experience.index');

Route::get('reservation/index', [ReservationController::class, 'index'])->name('reservation.index');
