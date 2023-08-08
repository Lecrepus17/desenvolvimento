<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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



Route::get('/',[UsersController::class, 'index']);


Route::get('/index', [UsersController::class, 'index'])->name('index');


Route::get('/register', [UsersController::class, 'register'])->name('register');


Route::get('/criar_post', [UsersController::class, 'criar_post'])->name('criar_post')->middleware('auth');


Route::get('/perfil', [UsersController::class, 'perfil'])->name('perfil')->middleware('auth');

Route::get('/editar_perfil', [UsersController::class, 'editar_perfil'])->name('editar_perfil')->middleware('auth');
Route::post('/editar_perfil', [UsersController::class, 'editar_perfil'])->middleware('auth');



Route::post('/postagens', [UsersController::class, 'postagens'])->name('postagens')->middleware('auth');

Route::get('/postagens', [UsersController::class, 'postagens'])->middleware('auth');


Route::get('/amigos', [UsersController::class, 'amigos'])->name('amigos')->middleware('auth');

Route::get('/sobre_perfil', [UsersController::class, 'sobre_perfil'])->name('sobre_perfil')->middleware('auth');

Route::get('/feedSeguindo', [UsersController::class, 'feedSeguindo'])->name('feedSeguindo')->middleware('auth');

