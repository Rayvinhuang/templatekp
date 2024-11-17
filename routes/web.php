<?php

use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JenisMenuController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::middleware(['auth', 'checkRole:A,U'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified', 'checkRole:A,U'])->name('dashboard');
    Route::resource('makanan', MakananController::class);
    Route::resource('minuman', MinumanController::class);
});

Route::middleware(['auth', 'checkRole:A'])->group(function () {
    Route::resource('customer', CustomerController::class);
    Route::resource('membership', MembershipController::class);
    Route::resource('jenisMenu', JenisMenuController::class);
});

Route::resource('login', LoginController::class);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('register', RegisterController::class);
