<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}',[ArticleController::class, 'show'])->name('article.show');

Route::get('/article/category/{category}',[ArticleController::class, 'byCategory'])->name('article.byCategory');

Route::get('/careers', [PublicController::class, 'careers'])->middleware('auth')->name('careers');
Route::get('/careers/submit', [PublicController::class, 'careersSubmit'])->middleware('auth')->name('careers.submit');

Route::prefix('admin')->middleware('is_admin')->group(function () {
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/{user}/set-admin',[AdminController::class, 'setAdmin'])->name('admin.setAdmin');
    Route::get('/{user}/set-revisor',[AdminController::class, 'setRevisor'])->name('admin.setRevisor');
    Route::get('/{user}/set-writer',[AdminController::class, 'setWriter'])->name('admin.setWriter');

});