<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;



Route::get('/',[ArticleController::class,'index']);
Route::get('/about',function(){
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact',[Controller::class,'contact']);


Route::get('/articles/{id}',[ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles',[ArticleController::class, 'all'])->name('articles.all');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
Route::post('/article', [ArticleController::class,'store'])->name('article.store');
Route::get('/article/create', 'ArticleController@create')->name('article.create');

Route::get('/dashboard',[ArticleController::class, 'dashboard'])->name('dashboard');
Route::put('/article/{article}', [ArticleController::class,'update'])->name('article.update');
Route::delete('/article/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/categorie',[CategorieController::class, 'index'])->name('categorie');
Route::put('/categorie/{categorie}', [CategorieController::class,'update'])->name('categorie.update');
Route::delete('/categorie/{categorie}', [CategorieController::class, 'destroy'])->name('categorie.destroy');
Route::post('/categorie', [CategorieController::class,'store'])->name('categorie.store');
