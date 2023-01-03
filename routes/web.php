<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EarringController;

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

Route::get('/', [EarringController::class,'index'])->name('index');
Route::get('/about', [EarringController::class,'about'])->name('about');
Route::get('/shop', [EarringController::class,'shop'])->name('shop');

Route::resource('earrings', EarringController::class);