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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\BookSchoolsController::class, 'index'])->name('home')->middleware('auth');

// Tampil Data
Route::get('/home', [App\Http\Controllers\BooksController::class, 'index'])->middleware('auth');
Route::get('/tampil/{book_schools}', [App\Http\Controllers\BookSchoolsController::class, 'show'])->name('data.sekolah')->middleware('auth');

// Tambah Data
Route::post('/create/book', [App\Http\Controllers\BooksController::class, 'store'])->name('create.book')->middleware('auth');
Route::post('/create/school', [App\Http\Controllers\SchoolsController::class, 'store'])->name('create.school')->middleware('auth');
Route::post('/create/pivot', [App\Http\Controllers\BookSchoolsController::class, 'store'])->name('create.pivot')->middleware('auth');
Route::post('/create/pinjam', [App\Http\Controllers\PinjamController::class, 'store'])->name('create.pinjam')->middleware('auth');


// Delete Data
Route::get('/delete/book/{books}', [App\Http\Controllers\BooksController::class, 'destroy'])->name('delete.book')->middleware('auth');
Route::get('/delete/school/{schools}', [App\Http\Controllers\SchoolsController::class, 'destroy'])->name('delete.school')->middleware('auth');
Route::get('/delete/pivot/{book_schools}', [App\Http\Controllers\BookSchoolsController::class, 'destroy'])->name('delete.pivot')->middleware('auth');
Route::get('/delete/pinjam/{pinjam}', [App\Http\Controllers\PinjamController::class, 'destroy'])->name('delete.pinjam')->middleware('auth');

// Edit Data
Route::post('/edit/book/{books}', [App\Http\Controllers\BooksController::class, 'update'])->name('update.book')->middleware('auth');
Route::post('/edit/school/{schools}', [App\Http\Controllers\SchoolsController::class, 'update'])->name('update.school')->middleware('auth');
Route::post('/edit/pivot/{book_schools}', [App\Http\Controllers\BookSchoolsController::class, 'update'])->name('update.pivot')->middleware('auth');