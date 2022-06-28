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






Route::get('/myspace', [MyspaceController::class, 'index'])->name('myspace.index')->middleware('auth');
Route::get('/myspace/create', [MyspaceController::class, 'create'])->name('myspace.create')->middleware('auth');
Route::get('/myspace/{qrcode:id}/edit', [MyspaceController::class, 'edit'])->name('myspace.edit')->middleware('auth');
Route::post('/myspace/store', [MyspaceController::class, 'store'])->name('myspace.store')->middleware('auth');
Route::put('/myspace/{qrcode:id}/update', [MyspaceController::class, 'update'])->name('myspace.update')->middleware('auth');
Route::delete('/myspace/{qrcode:id}/delete', [MyspaceController::class, 'destroy'])->name('myspace.delete')->middleware('auth');
Route::get('myspace/download/{qrcode:id}', [MyspaceController::class,'show'])->name('myspace.download')->middleware('auth');




Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
