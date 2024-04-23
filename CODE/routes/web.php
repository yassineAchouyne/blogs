<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/',[ArticleController::class,'index']);
Route::get('/articles/{id}',[ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles',[ArticleController::class, 'all'])->name('articles.all');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
Route::post('/article', 'ArticleController@store')->name('article.store');
Route::get('/article/create', 'ArticleController@create')->name('article.create');

