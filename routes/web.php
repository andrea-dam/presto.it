<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PublicController;
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
// Rotte Public
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// rotte item
Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');
Route::get('/item/index', [ItemController::class, 'index'])->name('item.index');
Route::get('/item/show/{item}', [ItemController::class, 'show'])->name('item.show');