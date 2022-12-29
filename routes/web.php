<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

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
Route::post('/send-form', [\App\Http\Controllers\FormController::class, 'store'])->name('send-form');

Route::get('/', \App\Http\Controllers\IndexController::class)
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        return $trail->push(__('breadcrumbs.index'), route('index'));
    });

Route::get('/contacts', \App\Http\Controllers\ContactsController::class)
    ->name('contacts')
    ->breadcrumbs(function (Trail $trail) {
        return $trail->parent('index')->push(__('breadcrumbs.contacts'));
    });
Route::get('/about', \App\Http\Controllers\AboutController::class)->name('about')
    ->breadcrumbs(function (Trail $trail) {
        return $trail->parent('index')->push(__('breadcrumbs.about'));
    });

Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services.index')
    ->breadcrumbs(function (Trail $trail) {
        return $trail->parent('index')->push(__('breadcrumbs.services'));
    });

Route::get('/services/{service}', [\App\Http\Controllers\ServiceController::class, 'show'])->name('services.show')
    ->breadcrumbs(function (Trail $trail, Service $service) {
        return $trail->parent('services.index')->push($service->name);
    });

Route::get('/{page}', \App\Http\Controllers\TextPageController::class);