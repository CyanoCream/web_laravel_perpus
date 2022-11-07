<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// API Tampil Data 
Route::get('/tampil/data/sekolah/buku/{id}' ,[ApiController::class,'data']);
Route::get('/book/school' ,[ApiController::class,'index']);
Route::get('/book' ,[ApiController::class,'book']);
Route::get('/school' ,[ApiController::class,'school']);

// API Create Data
Route::post('/bookschool/create' ,[ApiController::class,'store']);
Route::post('/book/create' ,[ApiController::class,'storebook']);
Route::post('/school/create' ,[ApiController::class,'storeschools']);

// API Update Data
Route::post('/book/update/{id}' ,[ApiController::class,'updatebook']);
Route::post('/school/update/{id}' ,[ApiController::class,'updateschool']);
Route::post('/bookschool/update/{id}' ,[ApiController::class,'update']);

//API Tampil Data ID
Route::get('/show/book/school/{id}' ,[ApiController::class,'show']);
Route::get('/show/book/{id}' ,[ApiController::class,'showbook']);
Route::get('/show/school/{id}' ,[ApiController::class,'showschool']);

// API Hapus Data
Route::get('/delete/book/school/{id}' ,[ApiController::class,'destroy']);
Route::get('/delete/book/{id}' ,[ApiController::class,'hapus']);
Route::get('/delete/school/{id}' ,[ApiController::class,'delete']);