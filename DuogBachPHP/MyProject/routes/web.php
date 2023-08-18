<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\TestController;
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

// Route::get('router gì', 'thực thi để lấy data')
// Route::get('/test', function () {
//     return "<h1>test</h1";
// });

// Cú pháp gọi controller vào route
Route::get('/test2/{a}/{b}', [TestController::class, "test2"]);
Route::get('/test', [TestController::class, "test"]);
Route::get('/test1', [TestController::class, "test1"]);
Route::post('/test', [TestController::class, "testForm"]);

Route::get('/form', function () {
    return "
    <form method=post>
        <input type=text />
        <button type=submit>Submit</button>
        " . csrf_field() . "  // form phương thức bảo mật
    </form>
    ";
});
Route::post('/form', function () {
    return "form success";
});

// Admin Router
Route::get('/login', [AuthController::class, "getLogin"])->middleware("checklogin");
Route::post('/login', [AuthController::class, "postLogin"])->middleware("checklogin");

Route::group(['prefix' => '/admin', "middleware" => "checkadmin"], function () {
    Route::get('/logout', [AdminController::class, "logout"]);
    Route::get('/', [AdminController::class, "index"]);
    Route::group(['prefix' => '/product'], function () {
        Route::get('/', [ProductController::class, "index"]);
        Route::get('/create', [ProductController::class, "create"]);
        Route::post('/store', [ProductController::class, "store"]);
        Route::get('/edit/{id}', [ProductController::class, "edit"]);
        Route::post('/update/{id}', [ProductController::class, "update"]);
        Route::get('/delete/{id}', [ProductController::class, "delete"]);
    });
    Route::group(['prefix' => '/category'], function () {
        Route::get('/', [CategoryController::class, "index"]);
        Route::get('/create', [CategoryController::class, "create"]);
        Route::post('/store', [CategoryController::class, "store"]);
        Route::get('/edit', [CategoryController::class, "edit"]);
        Route::post('/update', [CategoryController::class, "update"]);
        Route::get('/delete', function () {
            return 'delete';
        });
    });
    Route::group(['prefix' => '/user'], function () {
        Route::get('/', [UserController::class, "index"]);
        Route::get('/create', [UserController::class, "create"]);
        Route::post('/store', [UserController::class, "store"]);
        Route::get('/edit', [UserController::class, "edit"]);
        Route::post('/update', [UserController::class, "update"]);
        Route::get('/delete', function () {
            return 'delete';
        });
    });
    Route::group(['prefix' => '/order'], function () {
        Route::get('/', [OrderController::class, "index"]);
        Route::get('/detail', [OrderController::class, "detail"]);
        Route::post('/store', [OrderController::class, "store"]);
        Route::get('/processed', [OrderController::class, "processed"]);
    });
});
