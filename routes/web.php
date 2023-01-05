<?php

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

Route::get('/', [App\Http\Controllers\ProjectController::class,'index'])->name('tampil');
Route::get('/add', [\App\Http\Controllers\ProjectController::class, 'add']);
Route::post('/add', [\App\Http\Controllers\ProjectController::class, 'postAdd']);
Route::get('/update/{id}', [\App\Http\Controllers\ProjectController::class, 'update'] );
Route::post('/update', [\App\Http\Controllers\ProjectController::class, 'postUpdate']);
Route::get('/delete/{id}', [\App\Http\Controllers\ProjectController::class, 'delete']);
