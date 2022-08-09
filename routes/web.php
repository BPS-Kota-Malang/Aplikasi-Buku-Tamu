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
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustController;
use App\Http\Controllers\TransController;


// Customer Page - User
Route::get('/', [GuestController::class, 'formTamu'])->name('/');
Route::post('/cekcustomer', [GuestController::class, 'cekcustomer'])->name('cekcustomer');
Route::resource('formTamu', GuestController::class);

// User Page
Route::post('/simpan-bukutamu', [GuestController::class, 'saveGuest'])->name('simpan-bukutamu');

// Customer Page - Admin
Route::get('admin/tamu', [CustomerController::class, 'index'])->name('admin-tamu');
Route::get('admin/form-tambah', [CustomerController::class, 'formTambah'])->name('admin-form-tambah');
Route::post('admin/simpan-data',[CustomerController::class, 'simpanData'])->name('admin-simpan-data');
Route::get('admin/form-edit/{id}',[CustomerController::class, 'formEdit'])->name('admin-form-edit');
Route::post('admin/update-data/{id}', [CustomerController::class, 'updateTamu'])->name('admin-update-data');
Route::get('admin/show/{id}', [CustomerController::class, 'show'])->name('admin-show');
Route::post('admin/hapus-data', [CustomerController::class, 'hapusTamu'])->name('admin-hapus-data');
Route::post('/register', [CustomerController::class, 'register'])->name('register-admin');
Route::post('filterCustomer', [CustomerController::class, 'filterCustomer'])->name('filterCustomer');

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

//Feedback Page
Route::resource('feedback', FeedbackController::class);
Route::get('feedback', function()
{
    return view ('feedback.in');
});
//Route::get('showtransaction/form', [FeedbackController::class, 'store']);
Route::post('showtransaction', [FeedbackController::class, 'showTransaction'])->name('showtransaction');

//Transaction Page
Route::resource('transaction', TransactionController::class);
Route::post('filter', [TransactionController::class, 'filter'])->name('filter');

//Category Page
Route::resource('category', CategoryController::class);

//SubCategory Page
Route::resource('subcategory', SubCategoryController::class);

//Purpose Page
Route::resource('purpose', PurposeController::class);

//Login Page
Route::group(['prefix'=>config('admin.prefix'),'namespace'=>'App\\Http\\Controllers',],function (){
// Route::group(['middleware' => ['auth','admin']], function () {

    Route::get('/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout',[LoginController::class, 'logout'])->name('admin.logout');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::middleware(['auth:admin'])->group(function () {

    //     Route::view('/dashboard','dashboard')->name('dashboard');
    //     Route::view('/post','data-post')->name('post')->middleware('can:role,"admin","editor"');
    //     Route::view('/admin','data-admin')->name('admin')->middleware('can:role,"admin"');
    // });
});
// Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// // Route::get('/login', [LoginController::class, 'login'])->name('login');
// // Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
// // Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
// // Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Autentikasi Page
Auth::routes();

// Home Page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Home Page
Route::get('/pelanggan', function() {
    return view('Pengguna/index');
});

// About Page
route::get('/about', function() {
    return view('Pengguna/about');
});

// Contact Page
route::get('/contact', function() {
    return view('pengguna/contact');
});

//Admin List Page
Route::resource('data-admin', UserController::class);

// Customer - PDF
Route::get('/get-all-customer',[CustController::class, 'getAllCustomer']);
Route::get('/download-pdf',[CustController::class, 'downloadPDF']);

// Dashboard - PDF
Route::get('/get-all-report',[CustController::class, 'getAllReport']);
Route::get('/download-pdf-report',[CustController::class, 'downloadPDFReport']);

// Customer - Excel dan CSV
Route::get('/export-excel',[CustomerController::class, 'exportIntoExcel']);
Route::get('/export-csv',[CustomerController::class, 'exportIntoCSV']);

// Transaction - PDF
Route::get('/get-all-transaction',[TransController::class, 'getAllTransaction']);
Route::get('/download-pdf-transaction',[TransController::class, 'downloadPDFTransaction']);

// Transaction - Excel dan CSV
Route::get('/export-excel-transaction',[TransactionController::class, 'exportIntoExcelTransaction']);
Route::get('/export-csv-transaction',[TransactionController::class, 'exportIntoCSVTransaction']);

