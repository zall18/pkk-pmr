<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::post('/login', [AuthController::class, 'login']);

Route::get('/', [PostController::class, 'index']);
Route::get('/article', [PostController::class, 'article']);
Route::get('/video', [PostController::class, 'video']);
Route::get('/image', [PostController::class, 'image']);
Route::get('/category', [PostController::class, 'showcategory']);


Route::middleware('guest')->group(function () {
    Route::get('/loginPage', function () {
        return view('loginPage');
    });
});
Route::middleware('isAdmin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
