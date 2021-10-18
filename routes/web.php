<?php

use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Podcast\PodcastController;
use App\Http\Controllers\Podcast\PodcastEpisodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home.home');})->name('home');
Route::get('/cliente', function () {return view('cliente.cartilha');});

Route::get('/login',[AuthController::class,'show'])->name('login.show');
Route::post('/login',[AuthController::class,'login'])->name('login.make');

Route::prefix('podcast')->group(function () {

  //RSS
  Route::get('/rss',[PodcastController::class,'rss'])->name('podcast.rss');

  //podcast
  Route::get('/',[PodcastController::class,'show'])->name('podcast.home');
  Route::get('/create',[PodcastController::class,'create'])->name('podcast.create');
  Route::post('/create',[PodcastController::class,'store'])->name('podcast.store');
  Route::get('/edit/{podcast}',[PodcastController::class,'edit'])->name('podcast.edit');
  Route::post('/edit/{podcast}',[PodcastController::class,'update'])->name('podcast.update');

  //episodes
  Route::get('/epi/{epi}',[PodcastEpisodeController::class,'show'])->name('epi.show');
  Route::get('/create-epi',[PodcastEpisodeController::class,'create'])->name('epi.create');
  Route::post('/create-epi',[PodcastEpisodeController::class,'store'])->name('epi.store');
  Route::get('/edit-epi/{epi}',[PodcastEpisodeController::class,'edit'])->name('epi.edit');
  Route::post('/edit-epi/{epi}',[PodcastEpisodeController::class,'update'])->name('epi.update');
});

// ARTIGOS
Route::get('/artigos',[ArticleController::class,'index'])->name('article.index');
Route::get('/artigo/{slug}',[ArticleController::class,'show'])->name('article.show');
Route::get('/novo-artigo',[ArticleController::class,'create'])->name('article.create');
Route::post('/novo-artigo',[ArticleController::class,'store'])->name('article.store');
Route::get('/editar-artigo/{article}',[ArticleController::class,'edit'])->name('article.edit');
Route::post('/editar-artigo/{article}',[ArticleController::class,'update'])->name('article.update');
Route::post('/deletar-artigo/{article}',[ArticleController::class,'destroy'])->name('article.destroy');
