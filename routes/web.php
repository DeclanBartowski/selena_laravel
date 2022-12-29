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

Route::get('/', \App\Http\Controllers\IndexController::class);


Route::get('/contacts', \App\Http\Controllers\ContactsController::class);
Route::get('/about', \App\Http\Controllers\AboutController::class);
Route::resource('services', \App\Http\Controllers\ServiceController::class)->only([
    'index',
    'show'
]);

Route::get('/{page}', \App\Http\Controllers\TextPageController::class);

