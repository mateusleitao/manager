<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/singup', [UserController::class, 'SingupPage']);
Route::post('/createUser', [UserController::class, 'store']);
Route::get('/createUser/create', [UserController::class, 'create']);

