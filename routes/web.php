<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\escuelacontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('escuela',[escuelacontroller::class,'index'])->name('escuela.index');
Route::post('escuela',[escuelacontroller::class,'registrar'])->name('escuela.registrar');
Route::get('escuela/eliminar/{id}', [escuelacontroller::class, 'eliminar'])->name('escuela.eliminar');
Route::get('escuela/editar/{id}', [escuelacontroller::class, 'editar'])->name('escuela.editar');
Route::post('escuela/actualizar', [escuelacontroller::class, 'actualizar'])->name('escuela.actualizar');

