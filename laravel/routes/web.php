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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [UsersController::class, 'index'])->name('index');


Route::get('/register', [UsersController::class, 'register'])->name('register');

Route::get('/criar_post', [UsersController::class, 'criar_post'])->name('criar_post');


Route::get('/perfil', [UsersController::class, 'perfil'])->name('perfil');

Route::get('/editar_perfil', [UsersController::class, 'editar_perfil'])->name('editar_perfil');
Route::post('/editar_perfil', [UsersController::class, 'editar_perfil'])->name('editar_perfil');




Route::post('/postagens', [UsersController::class, 'postagens'])->name('postagens');

Route::get('/postagens', [UsersController::class, 'postagens'])->name('postagens');



Route::get('/amigos', [UsersController::class, 'amigos'])->name('amigos');