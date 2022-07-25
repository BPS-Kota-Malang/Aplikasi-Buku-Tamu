<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\User\GuestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialPopulationController;
use App\Http\Controllers\EconomyTradeController;
use App\Http\Controllers\AgricultureMiningController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;



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
// Customer Page - User
Route::get('/', [GuestController::class, 'formTamu'])->name('/');
Route::resource('formTamu', GuestController::class);

// User Page
Route::post('simpan-bukutamu', [GuestController::class, 'saveGuest'])->name('simpan-bukutamu');

// Customer Page - Admin
Route::get('admin/tamu', [CustomerController::class, 'index'])->name('admin-tamu');
Route::get('admin/form-tambah', [CustomerController::class, 'formTambah'])->name('admin-form-tambah');
Route::post('admin/simpan-data',[CustomerController::class, 'simpanData'])->name('admin-simpan-data');
Route::get('admin/form-edit/{id}',[CustomerController::class, 'formEdit'])->name('admin-form-edit');
Route::post('admin/update-data/{id}', [CustomerController::class, 'updateTamu'])->name('admin-update-data');
Route::get('admin/show/{id}', [CustomerController::class, 'show'])->name('admin-show');
Route::post('admin/hapus-data', [CustomerController::class, 'hapusTamu'])->name('admin-hapus-data');
Route::post('/register', [CustomerController::class, 'register'])->name('register-admin');



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


//Category
Route::resource('category', CategoryController::class);

//SubCategory
Route::resource('subcategory', SubCategoryController::class);


//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//index
Route::get('/pelanggan', function() {
    return view('Pengguna/index');
});

//about
route::get('/about', function() {
    return view('Pengguna/about');
});
//Contact
route::get('/contact', function() {
    return view('pengguna/contact');
});
