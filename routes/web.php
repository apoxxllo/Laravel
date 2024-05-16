<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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



// Route::get('/about', [PagesController::class, 'about']);
Route::get('/home', [ProductController::class, 'index'])->name('index');
Route::get('/login', [PagesController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [PagesController::class, 'register'])->middleware('guest');
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/add-product', [ProductController::class, 'addProduct']);
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct']);
Route::get('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/productDetails/{id}', [ProductController::class, 'productDetails']);
Route::get('/logout', [AccountController::class, 'logout'])->middleware('auth');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('auth');

Route::post('/add-product', [ProductController::class, 'addProductPost']);
Route::post('/editProductPost/{id}', [ProductController::class, 'editProductPost'])->name('editPost');
Route::post('/loginPost', [AccountController::class, 'loginPost']);
Route::post('/registerPost', [AccountController::class, 'register'])->name('registerPost');


