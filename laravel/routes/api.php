<?php

use App\Http\Controllers\Api\ApiComentariosController;
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


Route::get('/getPost/{id}', [ApiPostsController::class, 'getPost'])->name('getPost');
Route::get('/Post', [ApiPostsController::class, 'getAllPost'])->name('post');
Route::post('/createPost', [ApiPostsController::class, 'createPost'])->name('createPost');
Route::delete('/deletePost/{id}', [ApiPostsController::class, 'deletePost'])->name('deletePost');


Route::get('/getComent/{id}', [ApiComentariosController::class, 'getComent'])->name('getComent');
Route::get('/coment', [ApiComentariosController::class, 'getAllComent'])->name('coment');
Route::post('/createComent', [ApiComentariosController::class, 'createComent'])->name('createComent');
Route::delete('/deleteComent/{id}', [ApiComentariosController::class, 'deleteComent'])->name('deleteComent');
