<?php

use App\Http\Controllers\AccountController;
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
Route::get('/', [ProductController::class, 'index']);

Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/add-product', [ProductController::class, 'addProduct']);
Route::post('/add-product', [ProductController::class, 'addProductPost']);
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct']);
Route::post('/editProductPost/{id}', [ProductController::class, 'editProductPost'])->name('editPost');

Route::post('/registerPost', [AccountController::class, 'register'])->name('registerPost');


Route::get('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

Route::get('/productDetails/{id}', [ProductController::class, 'productDetails']);

