<?php

use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JenisMenuController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('makanan', MakananController::class);
Route::resource('minuman', MinumanController::class);
Route::resource('customer', CustomerController::class);
Route::resource('membership', MembershipController::class);
Route::resource('jenisMenu', JenisMenuController::class);
Route::resource('transaksi', TransaksiController::class);
