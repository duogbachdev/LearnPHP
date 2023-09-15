<?php

use App\Http\Controllers\User\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/user'], function () {
    Route::get('/', [UserController::class, "index"]);
    Route::get('/create', [UserController::class, "create"]);
    Route::post('/store', [UserController::class, "store"]);
    Route::get('/edit/{id}', [UserController::class, "edit"]);
    Route::post('/update/{id}', [UserController::class, "update"]);
    Route::get('/delete/{id}', [UserController::class, "delete"]);
});
