<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'index'])->name('inicio');
Route::get('crear',[HomeController::class, 'crear'])->name('crear');
Route::put('insertar',[HomeController::class, 'insertar'])->name('insertar');
Route::put('guardar/{articulo}',[HomeController::class, 'guardar'])->name('guardar');
Route::get('mostrar/{id}',[HomeController::class, 'mostrar'])->name('mostrar');
Route::get('borrar/{id}',[HomeController::class, 'borrar'])->name('borrar');
Route::get('modificar/{id}',[HomeController::class, 'modificar'])->name('modificar');
