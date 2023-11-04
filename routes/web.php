<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DirectorioController;
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


Route::get('/directorio',[DirectorioController::class,'index'])->name('directorio.index');
Route::get('/directorio/create',[DirectorioController::class,'create'])->name('directorio.create');
Route::post('/directorio/store',[DirectorioController::class,'store'])->name('directorio.store');

Route::get('/directorio/buscar',[DirectorioController::class,'buscar'])->name('directorio.buscar');
Route::get('/directorio/showContactos',[DirectorioController::class,'showContactos'])->name('directorio.contactos');
Route::get('/directorio/eliminar',[DirectorioController::class,'eliminar'])->name('directorio.eliminar');


Route::get('/contacto/create',[ContactoController::class,'create'])->name('contacto.create');
Route::delete('/contacto/delete/{id}',[ContactoController::class,'destroy'])->name('contacto.delete');