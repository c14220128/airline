<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\TicketController;
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

Route::get('/flights', [FlightController::class, 'daftar_penerbangan_page']);
Route::get('/flights/book/{id}', [FlightController::class, 'book_ticket_page']);

Route::post('/ticket/submit', [TicketController::class, 'book_ticket']);
