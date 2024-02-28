<?php

use App\Http\Controllers\Api\MainController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\KurssController;

use Illuminate\Http\Request;
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

// Route::resource('/users', [UserController::class]);

Route::get('/get_message', [MainController::class, 'GetMessage']);

Route::get('/posts', [PostController::class,'index']);
Route::post('/posts', [PostController::class,'store']);

Route::get('/kurss', [KurssController::class, 'index']);
Route::post('/kurss', [KurssController::class, 'store']);
