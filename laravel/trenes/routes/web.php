<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketTypeController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\TrainTypeController;

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

Route::resource("/ticket", TicketController::class);
Route::resource("/tipoticket", TicketTypeController::class);
Route::resource("/tren", TrainController::class);
Route::resource("/tipotren", TrainTypeController::class);