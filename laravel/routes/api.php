<?php

use App\Http\Controllers\Api\ApiPostsController;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiUsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('/Users', [ApiUsersController::class, 'getAllUsers'])->name('users');
Route::get('/GetUsers/{id}', [ApiUsersController::class, 'getUser'])->name('get.users');
Route::post('/CreateUser', [ApiUsersController::class, 'createUser'])->name('create.user');
Route::patch('/UpdateUser/{id}', [ApiUsersController::class, 'updateUser'])->name('update.users');
Route::delete('/DeleteUser/{id}', [ApiUsersController::class, 'deleteUser'])->name('deltete.users');
Route::post('/login', [ApiUsersController::class, 'login'])->name('login.user');


Route::get('/Post', [ApiPostsController::class, 'getAllPost'])->name('post');
Route::get('/createPost', [ApiPostsController::class, 'createPost'])->name('createPost');
