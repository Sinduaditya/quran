<?php

use App\Http\Controllers\QuranController;
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



//============ Quran
Route::get('/', [QuranController::class,'index'])->name('quran.home');
Route::get('surah/{id}',[QuranController::class,'details'])->name('quran.detail');