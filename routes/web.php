<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\MovieController;
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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/languages',[LanguageController::class, 'index'])->name('languages.index');
Route::get('/genres',[GenresController::class, 'index'])->name('genres.index');
Route::get('/channels',[ChannelController::class, 'index'])->name('channels.index');
Route::get('/movies',[MovieController::class, 'index'])->name('movies.index');
Route::get('/actors',[ActorController::class, 'index'])->name('actors.index');