<?php

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SlideController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\LoginMiddleware;
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

Route::get('/',[HomeController::class, 'index'] )->name('home');

Route::get('/detail/{id}',[HomeController::class, 'show'] )->name('detail');

Route::get('login', [AuthController::class, 'index_login'])->name('auth.login');
Route::post('login', [AuthController::class, 'login'])->name('auth.login')->middleware('login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');



Route::prefix('admin')->group(function (){
    Route::get('', [AuthController::class, 'admin'])->name('auth.admin');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('assess');

    Route::prefix('/users')->group(function (){
        Route::get('', [UserController::class, 'index'])->name('users.index')->middleware('assess');
        Route::get('/create', [UserController::class, 'create_user'])->name('create_user');
        Route::post('/create', [UserController::class, 'post_add'])->name('post_add');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [UserController::class,'delete'])->name('users.destroy');
    });

    Route::prefix('/products')->group(function (){
        Route::get('',[ProductController::class,'index'])->name('products.index');
        Route::get('/add',[ProductController::class,'create'])->name('products.add');
        Route::post('/add_pr',[ProductController::class,'post_add'])->name('products.post_add');
        Route::delete('/delete/{id}',[ProductController::class,'destroy'])->name('products.delete');

    })->name('products');

    Route::prefix('/categories')->group(function (){
        Route::get('',[CategoryController::class,'index'])->name('categories.index');
        Route::get('/add',[CategoryController::class,'create'])->name('category.add');
        Route::post('/add_pr',[CategoryController::class,'post_add'])->name('category.post_add');
        Route::delete('/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');

    })->name('categories');

    Route::prefix('/slides')->group(function (){
        Route::get('',[SlideController::class,'index'])->name('slides.index');
        Route::get('/add',[SlideController::class,'create'])->name('slide.add');
        Route::post('/add_pr',[SlideController::class,'post_add'])->name('slide.post_add');
        Route::delete('/delete/{id}',[SlideController::class,'destroy'])->name('slide.delete');

    })->name('categories');
});


// CART

Route::get('/cart',[CartController::class, 'index'] )->name('home.cart');
Route::post('/add_cart',[CartController::class, 'store'] )->name('add_to_cart');
