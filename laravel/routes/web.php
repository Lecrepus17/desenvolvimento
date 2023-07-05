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

Route::get('/login', [UsersController::class, 'login'])->name('login');

Route::get('/register', [UsersController::class, 'register'])->name('register');

Route::get('/criar_blog', [UsersController::class, 'criar_blog'])->name('criar_blog');

Route::get('/perfil', [UsersController::class, 'perfil'])->name('perfil');
