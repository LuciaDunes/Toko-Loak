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
Route::get('/', [ItemController::class, 'home'])->name('home');
Route::get('/tambah', [ItemController::class, 'add'])->name('add');
Route::post('/simpan', [ItemController::class, 'store'])->name('store');
Route::get('/edit', [ItemController::class, 'edit'])->name('edit');
