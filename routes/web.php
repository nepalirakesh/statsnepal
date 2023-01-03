<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomAuthController;

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




//Auth::routes();

//Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::group(['middleware' => ['auth']], function () {});

Route::get('/',[PostController::class,'index'])->name('posts');
Route::get('/posts/create',[PostController::class,'create'])->name('create');
Route::post('/posts/store',[PostController::class,'store'])->name('store');
Route::delete('/posts/delete/{post}',[PostController::class,'delete'])->name('delete');
Route::get('/posts/edit/{post}',[PostController::class,'edit'])->name('edit');
Route::put('/posts/update/{post}',[PostController::class,'update'])->name('update');
Route::get('/posts/show/{post}',[PostController::class,'show'])->name('show');


// ...............................Routes for custom authentication....................................................

Route::get('/show_login',[CustomAuthController::class,'show_custom_login_form'])->name('show_login');
Route::get('/show_registration',[CustomAuthController::class,'show_custom_registration_form'])->name('show_registration');
Route::post('/custom_registration',[CustomAuthController::class,'custom_registration'])->name('custom_registration');
Route::post('/custom_login',[CustomAuthController::class,'custom_login'])->name('custom_login');
Route::get('/custom_logout',[customAuthController::class,'custom_logout'])->name('custom_logout');

