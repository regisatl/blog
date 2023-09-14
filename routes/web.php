<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [PagesController::class, 'index'])->name('home');


Route::get('/about-us', [PagesController::class, 'about'])->name('about')->middleware('guest');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact')->middleware('guest');

//  Route for the article create, update, delete
Route::get('/articles', [ArticlesController::class, 'articles'])->name('articles');

Route::get('/articles/create', [ArticlesController::class, 'create'])->name('create')->middleware('admin');

Route::post('/articles/create', [ArticlesController::class, 'store'])->name('create')->middleware('admin');

Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit'])->name('edit')->middleware('auth');

Route::patch('/articles/{article}/edit', [ArticlesController::class, 'update'])->name('edit')->middleware('auth');

Route::delete('article/{article}/delete', [ArticlesController::class, 'delete'])->name('delete')->middleware('auth');

// Route for Auth, Register, Login

//  Route for Register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/create', [RegisterController::class, 'create'])->middleware('guest');

//  Route for Login 
Route::get('/login', [SessionsController::class, 'index'])->middleware('guest');
Route::post('/sign', [SessionsController::class, 'authentificate'])->middleware('guest');

Route::get('/logout', [SessionsController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/profile', [UserController::class, 'index'])->name('profile')->middleware('auth');

Route::get('/articles/{articles}', [ArticlesController::class, 'show'])->name('article')->middleware('auth');


require __DIR__ . '/auth.php';