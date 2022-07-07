<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', HomeController::class)->name('home');
Route::post('/', [ContactoController::class, 'store'])->name('contacto');

Auth::routes();

/* Rutas para dashboard */#
Route::middleware('auth')->group(function(){
    Route::get('/admin', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin');
    Route::get('/admin/proyectos', [App\Http\Controllers\admin\ProyectoController::class, 'index'])->name('admin.proyectos');
    Route::post('/admin/proyectos/crear', [App\Http\Controllers\admin\ProyectoController::class, 'store'])->name('admin.proyectos.crear');
    Route::post('/admin/proyectos/ver/{id}', [App\Http\Controllers\admin\ProyectoController::class, 'show'])->name('admin.proyectos.ver');
    Route::post('/admin/proyectos/editar/{id}', [App\Http\Controllers\admin\ProyectoController::class, 'update'])->name('admin.proyectos.editar');
    Route::post('/admin/proyectos/eliminar/{id}', [App\Http\Controllers\admin\ProyectoController::class, 'delete'])->name('admin.proyectos.eliminar');
});


