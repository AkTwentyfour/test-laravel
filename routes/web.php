<?php

use App\Http\Controllers\OrderedController;
use App\Http\Controllers\ReportController;
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

Route::get('/home', [HomeController::class, 'index']);


Route::get('/ticket', [TicketController::class, 'index']);


Route::get('/order/{ticket}', [OrderController::class, 'index'])->middleware('auth');
Route::post('/order/{ticket}', [OrderController::class, 'store'])->middleware('auth');


Route::get('/ordered', [OrderedController::class, 'index']);
Route::get('/detail/{order}', [OrderedController::class, 'show']);
// Route::delete('/detail/{order}', [OrderedController::class, 'destroy']);

Route::get('/report', [ReportController::class, 'index'])->middleware('admin');