<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ItemController::class, 'landingPage'])->name('landingPage');
Route::get('/catalog', [ItemController::class, 'catalog'])->name('catalog');

Route::get('/barang', [ItemController::class, 'showItems'])->name('showItems');
Route::get('/tambah', [ItemController::class, 'add'])->name('add');
Route::post('/simpan', [ItemController::class, 'store'])->name('store');
Route::get('/edit/{data}', [ItemController::class, 'edit'])->name('edit');
Route::get('/Transaction', [TransactionController::class, 'showTransaction'])->name('showTransaction');
Route::post('/delete/{data}',[ItemController::class, 'delete'])->name('delete');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/single/{data}', [HomeController::class, 'single'])->name('single');
