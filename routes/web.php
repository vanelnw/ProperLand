<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function(){
   route::resource('property', \App\http\Controllers\Admin\PropertyController::class)->except(['show']);
   route::resource('option', \App\http\Controllers\Admin\OptionController::class)->except(['show']);
   route::resource('agent', \App\http\Controllers\Admin\AgentController::class)->except(['show']);
});