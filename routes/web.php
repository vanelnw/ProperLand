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

Route::get('/', [\App\http\Controllers\HomeController::class, 'index']);

Route::get('/properties', [\App\http\Controllers\PropertyController::class, 'index'])->name('property.index');
Route::get('/properties/{slug}-{property}', [\App\http\Controllers\PropertyController::class, 'show'])->name('property.show')->where([
    'property'=> '[0-9]+',
    'slug'=> '[0-9a-z\-]+'
]
);

Route::post('/properties/{property}/contact', [\App\http\Controllers\PropertyController::class, 'contact'])->name('property.contact')->where([
    'property'=> '[0-9]+'
]
);;

Route::get('/login',[\App\http\Controllers\AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login',[\App\http\Controllers\AuthController::class, 'doLogin']);
Route::delete('/logout',[\App\http\Controllers\AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
   route::resource('property', \App\http\Controllers\Admin\PropertyController::class)->except(['show']);
   route::resource('option', \App\http\Controllers\Admin\OptionController::class)->except(['show']);
   route::resource('agent', \App\http\Controllers\Admin\AgentController::class)->except(['show']);
});