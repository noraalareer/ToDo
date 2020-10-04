<?php

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
    return view('welcome');
});
//route::middleware('auth')->group(function(){
  Route::get('/todo',[App\Http\Controllers\TodoController::class, 'index'])->name('todo.index');
  Route::put('/todo/{todo}/complete',[App\Http\Controllers\TodoController::class, 'complete'])->name('todo.complete');
  Route::delete('/todo/{todo}/delete',[App\Http\Controllers\TodoController::class, 'delete'])->name('todo.delete');

//});
Route::get('/todo/create',[App\Http\Controllers\TodoController::class, 'create']);
Route::patch('/todo/{todo}/update',[App\Http\Controllers\TodoController::class, 'update'])->name('todo.update');
Route::post('/todo/create',[App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todo/{todo}/edit',[App\Http\Controllers\TodoController::class, 'edit']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
