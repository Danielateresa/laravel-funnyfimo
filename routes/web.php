<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EarringController;
use App\Http\Controllers\RingController;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class,'index'])->name('index');
Route::get('/about', [EarringController::class,'about'])->name('about');
Route::get('/earringsDB', [EarringController::class,'earringsDB'])->name('earringsDB');
Route::get('/ringsDB', [RingController::class,'ringsDB'])->name('ringsDB');
Route::get('/earringsShop', [EarringController::class,'earringsShop'])->name('earringsShop');
Route::get('/ringsShop', [RingController::class,'ringsShop'])->name('ringsShop');

Route::resource('earrings', EarringController::class);
Route::resource('rings', RingController::class);