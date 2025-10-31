<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return 'Welcome';
})->name('root');

Route::get('about', [PageController::class, 'about'])
    ->name('about');

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');

// POST-запрос
Route::post('articles', [ArticleController::class, 'store'])
  ->name('articles.store');

Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');
