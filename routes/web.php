<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// rotte CRUD Articoli
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');
