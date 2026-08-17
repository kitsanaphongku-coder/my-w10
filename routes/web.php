<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
Route::get('/', function () {
    return view("index");
});

Route::get('/welcome', function () {
    return view("welcome");
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/blog', function () {
    return view("blog");
});

Route::get('/blogs',[AdminController::class,'blogs'])->name("blogs");

Route::get('/abouts',[AdminController::class,'abouts'])->name("abouts");

Route::get('/create',[AdminController::class,'create'])->name("create");

Route::post('/insert',[AdminController::class,'insert'])->name("insert");

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "เชื่อมต่อฐานข้อมูลสำเร็จ! Database name: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $e->getMessage();
    }
});

Route::get('/delete/{id}',[AdminController::class,'delete']);
