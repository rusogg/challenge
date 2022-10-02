<?php

use App\Http\Controllers\PersonasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\DiscountsController;
use App\Http\Livewire\CreatePost;
use App\Http\Livewire\CreateUpdate;
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


Route::get('/', [UserController::class, 'index'])->name('user.index')->middleware('guest');
Route::POST('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/principal', [DiscountsController::class, 'principal'])->name('descuentos.principal')->middleware('auth');

Route::get('/create', [FormularioController::class, 'create'])->name('formulario.create');


Route::POST('/store', [CreatePost::class, 'store'])->name('formulario.store');
Route::get('/edit/{id}', [CreateUpdate::class, 'edit'])->name('formulario.edit');



Route::put('/update/{id}', [CreateUpdate::class, 'update'])->name('formulario.update');


Route::get('/show/{id}', [CreateUpdate::class, 'show'])->name('formulario.show');
Route::put('/destroy/{id}', [CreateUpdate::class, 'destroy'])->name('formulario.destroy');

