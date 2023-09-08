<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Tweet
|--------------------------------------------------------------------------
*/
// 初期表示
Route::get('tweet', \App\Http\Controllers\Tweet\IndexController::class)
    ->name('tweet.index');
// 登録
Route::post('tweet/create', \App\Http\Controllers\Tweet\CreateController::class)
    ->name('tweet.create');
