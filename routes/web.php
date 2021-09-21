<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PiiController;

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

Route::get('/', [PiiController::class, 'index'])->name('add');
Route::post('/agregar', [PiiController::class, 'store'])->name('store');
Route::get('/consu', [PiiController::class, 'show'])->name('consu');