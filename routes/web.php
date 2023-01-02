<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});



Auth::routes();

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::get('/posts/create',[PostController::class,'create'])->name('create');
Route::post('/posts/store',[PostController::class,'store'])->name('store');
Route::delete('/posts/delete/{post}',[PostController::class,'delete'])->name('delete');
Route::get('/posts/edit/{post}',[PostController::class,'edit'])->name('edit');
Route::put('/posts/update/{post}',[PostController::class,'update'])->name('update');
Route::get('/posts/show/{post}',[PostController::class,'show'])->name('show');
