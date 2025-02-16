<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;

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

// Página de inicio
Route::get('', [PostController::class, 'index'])->name('home');
Route::get('/equipo', [PostController::class, 'indexTeam'])->name('team');
Route::get('/post', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('post/actualizar/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/actualizar/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('post/eliminar/{post}', [PostController::class, 'destroy'])->name('post.destroy');

// Páginas para las especialidades
Route::get('especialidad/crear', [App\Http\Controllers\SpecialtieController::class, 'create'])->name('spec.create');
Route::get('especialidad/guardar', [App\Http\Controllers\SpecialtieController::class, 'store'])->name('spec.store');
Route::get('especialidad/mostrar', [App\Http\Controllers\SpecialtieController::class, 'show'])->name('spec.show');

// Autenticación
Auth::routes();
