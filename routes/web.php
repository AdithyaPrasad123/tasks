<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

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

Route::get('/register',[HomeController::class,'register'])->name('login.register');
Route::post('/doregister',[HomeController::class,'doregister'])->name('login.doregister');
Route::get('/login',[HomeController::class,'login'])->name('login.login');
Route::post('/dologin',[HomeController::class,'dologin'])->name('login.dologin');
Route::get('/logout',[HomeController::class,'logout'])->name('login.logout');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index')->middleware('check');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create')->middleware('check');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store')->middleware('check');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show')->middleware('check');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit')->middleware('check');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update')->middleware('check');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy')->middleware('check');

Route::get('/category_register',[CategoryController::class,'register'])->name('category.register')->middleware('check');
Route::post('/category_doregister',[CategoryController::class,'doregister'])->name('category.doregister')->middleware('check');

