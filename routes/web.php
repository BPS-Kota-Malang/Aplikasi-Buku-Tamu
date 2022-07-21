<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialPopulationController;
use App\Http\Controllers\EconomyTradeController;
use App\Http\Controllers\AgricultureMiningController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TransactionController;


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
// Bagian Pengunjung
Route::get('/', [CustomerController::class, 'index'])->name('index');
Route::resource('formTamu', CustomerController::class);

// Bagian User
Route::post('simpan-bukutamu', [TamuController::class, 'saveGuest'])->name('simpan-bukutamu');

// Dashboard Page
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Education Page
Route::resource('education', EducationController::class);

// Job Page
Route::resource('job', JobController::class);

// Media Page
Route::resource('media', MediaController::class);

// Service Page
Route::resource('service', ServiceController::class);

// Social & Population Page
Route::resource('socpul', SocialPopulationController::class);

// Economy & Trade Page
Route::resource('ecotra', EconomyTradeController::class);

// Agriculture & Mining Page
Route::resource('agrimin', AgricultureMiningController::class);

//Feedback
Route::resource('feedback', FeedbackController::class);

//Transaksi
Route::resource('transaction', TransactionController::class);

