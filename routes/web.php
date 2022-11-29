<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RevisorController;

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
Route::post('/lang/{lang}',[PublicController::class,'setLanguage'])->name('set_language_locale');

// rotte item
Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');
Route::get('/item/index', [ItemController::class, 'index'])->name('item.index');
Route::get('/item/show/{item}', [ItemController::class, 'show'])->name('item.show');

// Rotte Categorie
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category.index');

// Rotte revisor
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('/accept/item/{item}', [RevisorController::class, 'acceptItem'])->name('revisor.accept_item');
Route::patch('/reject/item/{item}', [RevisorController::class, 'rejectItem'])->name('revisor.reject_item');
Route::patch('/unreject/item/{item}', [RevisorController::class, 'acceptItem'])->name('revisor.undo-item');
Route::get('request/revisor', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
Route::get('make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// Rotte ricerca
Route::get('/ricerca/annuncio', [PublicController::class, 'searchItems'])->name('items.search');


