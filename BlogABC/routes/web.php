<?php

use App\Http\Controllers\ArticleController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

/* Route::get('/accueil', function () {
    return view('accueil');
})->name('art.accueil'); */

Route::get('/publierArticle', function () {
    return view('publierArticle');
});

Route::get('/creerCompte', function () {
    return view('creerCompte');
});

Route::get('/consulterArticle', function () {
    return view('consulterArticle');
});

Route::get('/accueil', [ArticleController::class, 'index'])->name('cat.list');

Route::get('/publierArticle', [ArticleController::class, 'showCategories'])->name('art.publier');

Route::post('/publierArticle', [ArticleController::class, 'store'])->name('art.store');

Route::get("/article", [ArticleController::class, "show"])->name('art.show');

Route::post("/article", [ArticleController::class, 'storeCommentaire'])->name('comment.store');