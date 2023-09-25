<?php

use App\Http\Controllers\TasklistController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addlist', [TasklistController::class, 'index'])->name('addlist.index');

Route::post('/addlist/create', [TasklistController::class, 'create'])->name('addlist.create');

Route::get('/edit/{id}', [TasklistController::class, 'edit'])->name('addlist.edit');

Route::put('/edit/{data}/update', [TasklistController::class, 'update'])->name('addlist.update');

Route::delete('/addlist/{data}/delete', [TasklistController::class, 'destroy'])->name('addlist.delete');