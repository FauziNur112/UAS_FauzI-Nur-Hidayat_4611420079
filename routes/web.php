<?php

use App\Http\Controllers\perpus;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [perpus::class,'index'])->name('index');
Route::get('/buatbuku', [perpus::class,'create'])->name('buatbuku');

Route::get('/delete/{id}', [perpus::class,'destroy'])->name('hapusbuku');
Route::post('/simpanbuku', [perpus::class,'store'])->name('simpanbuku');
Route::get('/editbuku/{id}', [perpus::class,'edit'])->name('editbuku');
Route::post('/updatebuku/{id}', [perpus::class,'update'])->name('updatebuku');
Route::get('/delete/{id}', [perpus::class,'destroy'])->name('hapusbuku');
