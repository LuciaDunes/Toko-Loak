<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ItemController::class, 'landingPage'])->name('landingPage');
Route::get('/catalog', [ItemController::class, 'catalog'])->name('catalog');
Route::get('/single', [ItemController::class, 'single'])->name('single');
Route::get('/barang', [ItemController::class, 'showItems'])->name('showItems');
Route::get('/tambah', [ItemController::class, 'add'])->name('add');
Route::post('/simpan', [ItemController::class, 'store'])->name('store');
Route::get('/edit', [ItemController::class, 'edit'])->name('edit');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
