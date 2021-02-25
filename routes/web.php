<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\CommentsController;
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
    return view('wecomee');
});

Route::get('/articles', [ArticlesController::class, 'index'])->name('articles');
Route::get('/article/{id}', [ArticlesController::class, 'show']);
Route::get('/activity/{id}', [ActivitiesController::class, 'show']);
Route::get('/createarticle', [ArticlesController::class, 'create'])->middleware('auth');
Route::get('/createactivity', [ActivitiesController::class, 'create'])->middleware('auth');
Route::post('/createactivity', [ActivitiesController::class, 'store'])->middleware('auth');
Route::post('/createcomment', [CommentsController::class, 'store']);
Route::post('/storearticle', [ArticlesController::class, 'store'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
