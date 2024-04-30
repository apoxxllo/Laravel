<?php
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
Route::get('/productDetails/{id}', [ProductController::class, 'productDetails']);

