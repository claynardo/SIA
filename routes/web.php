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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jadwalkuliah/index', [App\Http\Controllers\jadwalController::class, 'index'])->name('jadwalkuliah.index');

Route::get('/jadwalkuliah/create', [App\Http\Controllers\jadwalController::class, 'create'])->name('jadwalkuliah.create');
Route::post('/jadwalkuliah/store', [App\Http\Controllers\jadwalController::class, 'store'])->name('jadwalkuliah.store');

Route::get('/jadwalkuliah/{id}/edit', [App\Http\Controllers\jadwalController::class, 'edit'])->name('jadwalkuliah.edit');
Route::put('/jadwalkuliah/{id}/edit', [App\Http\Controllers\jadwalController::class, 'update'])->name('jadwalkuliah.update');

Route::get('/jadwalkuliah/delete/{id}', [App\Http\Controllers\jadwalController::class, 'delete'])->name('jadwalkuliah.delete');


