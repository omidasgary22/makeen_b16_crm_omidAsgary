<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::post('login', [UserController::class,'login'])->name('login ');


Route::group(['prefix' => 'users', 'as'=>'users.', 'middleware' => 'auth:sanctum'],function(){
    Route::get('index', [UserController::class, 'index'])->name('index');
    Route::get('single/{id}', [UserController::class, 'single'])->name('single');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');
    Route::put('edit/{id}', [UserController::class, 'edit'])->name('edit');
});

Route::group(['prefix' => 'products', 'as'=>'products.', 'middleware' => 'auth:sanctum'],function(){
    Route::get('index/{id?}', [ProductController::class, 'index'])->name('index');
    Route::post('store', [ProductController::class, 'store'])->name('store');
    Route::put('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'orders', 'as'=>'orders.','middleware' => 'auth:sanctum'],function(){
    Route::get('index/{id?}', [OrderController::class, 'index'])->name('index');
    Route::post('store', [OrderController::class, 'store'])->name('store');
    Route::put('edit/{id}', [OrderController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [OrderController::class, 'delete'])->name('delete');
});

