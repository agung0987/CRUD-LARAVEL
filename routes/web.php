<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('header/navbar');
});
Route::get('/index-mhs', [mahasiswaController::class, 'index']);
Route::get('/tambah-mhs', [mahasiswaController::class, 'indexTambah']);
Route::post('/store-mhs', [mahasiswaController::class, 'store']);
Route::get('/edit-mhs/{id}', [mahasiswaController::class, 'edit']);
Route::post('/update-mhs', [mahasiswaController::class, 'update']);
Route::get('/delete-mhs/{id}', [mahasiswaController::class, 'delete']);
