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

Route::get('/',[App\Http\Controllers\Home\HomeController::class,'welcome']);
Route::get('/development',[App\Http\Controllers\Home\HomeController::class,'development']);
Route::get('/digitalmarketing',[App\Http\Controllers\Home\HomeController::class,'digitalmarketing']);
Route::get('/graphicsdesing',[App\Http\Controllers\Home\HomeController::class,'graphicsdesing']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

