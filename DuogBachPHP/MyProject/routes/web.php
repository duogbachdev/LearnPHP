<?php

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

// Route::get("router gì", "thực thi để lấy data")
Route::get("/test", function () {
    return "<h1>Test</h1";
});
Route::get("/form", function () {
    return "
    <form method='post'
        <input type='email'>
        <button type=submit>Submit</button>" . csrf_field() . "
    </form>
    ";
});

Route::post("/form", function () {
    return "success";
});

// Router Admin
Route::get("/login", function () {
    return "login";
});
Route::post("/login", function () {
    return "login";
});
//Group Admin
Route::group(["prefix" => "/admin"], function () {
    Route::get("/logout", function () {
        return "logout";
    });
    Route::get("/", function () {
        return "admin";
    });

    // Group routes
    Route::group(["prefix" => "/product"], function () {
        Route::get("/", function () {
            return "product";
        });
        Route::get("/create", function () {
            return "create product";
        });
        Route::post("/store", function () {
            return "store product";
        });
        Route::get("/edit", function () {
            return "edit product";
        });
        Route::post("/update", function () {
            return "update product";
        });
        Route::get("/delete", function () {
            return "delete product";
        });
    });
});
