<?php

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about-us', [PagesController::class, 'about']);

Route::get('/contact-us', [PagesController::class, 'contact']);

Route::get('/articles', [ArticlesController::class, 'articles']);

Route::get('/articles/create', [ArticlesController::class, 'create']);

Route::post('/articles/create', [ArticlesController::class, 'store']);

Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);

Route::patch('/articles/{article}/edit', [ArticlesController::class, 'update']);

Route::delete('articles/{article}/delete', [ArticlesController::class, 'delete']);

Route::get('/articles/{articles}', [ArticlesController::class, 'show']);


require __DIR__ . '/auth.php';