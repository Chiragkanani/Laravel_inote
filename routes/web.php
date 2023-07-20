<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;

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


Route::any('/Register',[App\Http\Controllers\InoteController::class, 'register'])->name('register');
Route::any('/Register_post',[App\Http\Controllers\InoteController::class, 'register_post'])->name('register_post');
Route::any('/login',[App\Http\Controllers\InoteController::class, 'login'])->name('login');
Route::any('/login_post',[App\Http\Controllers\InoteController::class, 'login_post'])->name('login_post');
Route::any('/logout',[App\Http\Controllers\InoteController::class, 'logout'])->name('logout');






Route::group(['middleware'=>['auth']],function(){ 



    Route::any('/index',[App\Http\Controllers\InoteController::class, 'index'])->name('index');
    Route::any('/inote_insert',[App\Http\Controllers\InoteController::class, 'insert']);
    Route::any('/inote_delete/{id}',[App\Http\Controllers\InoteController::class, 'delete']);
    Route::any('/inote_edit/{id}',[App\Http\Controllers\InoteController::class, 'edit']);
    Route::any('/inote_update',[App\Http\Controllers\InoteController::class, 'update'])->name('hello');
    



    
});


