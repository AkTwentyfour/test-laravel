<?php

use App\Http\Controllers\OrderedController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/ticket', [TicketController::class, 'index'])->middleware('auth');


Route::get('/order/{ticket}', [OrderController::class, 'index'])->middleware('auth');
Route::post('/order/{ticket}', [OrderController::class, 'store'])->middleware('auth');


Route::get('/ordered', [OrderedController::class, 'index']);