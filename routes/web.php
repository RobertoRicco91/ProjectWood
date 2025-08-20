<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// rotte livewire CRUD Articoli
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');
Route::get('/create/index', [ArticleController::class, 'index'])->name('index.article');
Route::get('/create/article/{article}', [ArticleController::class, 'show'])->name('show.article');
// rotte categorie
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

