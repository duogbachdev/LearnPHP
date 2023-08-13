<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Product\ProductController;
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
Route::get('/login', [AuthController::class, "getLogin"]);
Route::post('/login', [AuthController::class, "postLogin"]);

Route::group(['prefix' => '/admin'], function () {
    Route::get('/logout', function () {
        return 'logout';
    });
    Route::get('/', [AdminController::class, "index"]);
    Route::group(['prefix' => '/product'], function () {
        Route::get('/', [ProductController::class, "index"]);
        Route::get('/create', [ProductController::class, "create"]);
        Route::post('/store', [ProductController::class, "store"]);
        Route::get('/edit', [ProductController::class, "edit"]);
        Route::post('/update', [ProductController::class, "update"]);
        Route::get('/delete', function () {
            return 'delete';
        });
    });
});
