<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [Controller::class, 'hello']);

Route::get('/museums', [Controller::class, 'museums'])->name('museums');
Route::get('/cinemas', [Controller::class, 'cinemas'])->name('cinemas');
Route::get('/visit', [Controller::class, 'visit'])->name('visit');
Route::post('/form', [Controller::class, 'handleForm']);



