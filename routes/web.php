<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
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



Route::get('/api/users', [UserController::class, 'index']);
Route::get('/api/users/{id}', [UserController::class, 'show']);

Route::middleware(['auth'])->group(function(){
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
    Route::post('/article/post', [ArticleController::class, 'update'])->name('article.update');

    Route::post('/article/create', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout'); 

}); 
Route::get('/register', [registerController::class, 'form_register'])->name('register');
Route::post('/register', [registerController::class, 'form_register_post'])->name('register_post');
Route::get('/login', [LoginController::class, 'form_login'])->name('login');
Route::post('/login', [LoginController::class, 'form_login_post'])->name('login_post');
