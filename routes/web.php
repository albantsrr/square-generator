<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\MyspaceController;


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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::post('/',[HomeController::class, 'index']);






Route::get('/myspace', [MyspaceController::class, 'index'])->name('myspace')->middleware('auth');
Route::get('/myspace/create', [MyspaceController::class, 'create'])->name('myspace.create')->middleware('auth');
Route::post('/myspace/store', [MyspaceController::class, 'store'])->name('myspace.store')->middleware('auth');




Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
