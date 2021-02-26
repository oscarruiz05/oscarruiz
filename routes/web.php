<?php

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

Auth::routes();

Route::get('/admin', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin');
Route::get('/admin/proyectos', [App\Http\Controllers\admin\ProyectoController::class, 'index'])->name('admin.proyectos');
Route::post('/admin/proyectos/crear', [App\Http\Controllers\admin\ProyectoController::class, 'store'])->name('admin.proyectos.crear');
