<?php

use App\Http\Controllers\Attendance;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SupplierController;
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

Route::get('/ggggg', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/employer',[EmployerController::class,'employer'])->name('employer');
Route::post('/employer/post',[EmployerController::class,'employer_store'])->name('employer.store');
Route::get('/employer/all_employer',[EmployerController::class,'all_employer'])->name('all.employer');
Route::get('/employer/all_employer/delete/{id}',[EmployerController::class,'all_employer_delete'])->name('all.employer.delete');
Route::get('/employer/all_employer/update/{id}',[EmployerController::class,'all_employer_update'])->name('all.employer.update');
Route::post('/employer/all_employer/update/store/{id}',[EmployerController::class,'all_employer_update_store'])->name('all.employer.update.store');
Route::get('/employer/all_employer/update/view/{id}',[EmployerController::class,'all_employer_view'])->name('all.employer.view');
Route::get('/customer',[CustomerController::class,'customer'])->name('customer');
Route::post('/customer/store',[CustomerController::class,'customer_store'])->name('customer.store');
Route::get('/customer/all',[CustomerController::class,'customer_all'])->name('customer.all');
Route::get('/supplyer',[SupplierController::class,'supplyer'])->name('supplyer');
Route::post('/supplyer/store',[SupplierController::class,'supplyer_store'])->name('supplyer.store');
Route::get('/salary/advance',[SalaryController::class,'advance_salary'])->name('advance.salary');
Route::post('/salary/advance',[SalaryController::class,'advance_salary_store'])->name('advance.salary.store');
Route::get('/salary/pay',[SalaryController::class,'pay_salary'])->name('pay.salary');
Route::get('/category',[ProductController::class,'category'])->name('category');
Route::post('/category',[ProductController::class,'category_store'])->name('category.store');
Route::get('/all/category',[ProductController::class,'category_all'])->name('category.all');
Route::get('/add/product',[ProductController::class,'add_product'])->name('add.product');
Route::post('/add/product/store',[ProductController::class,'store_product'])->name('store.product');
Route::get('/attendance',[Attendance::class,'attendance'])->name('attendance');
Route::post('/attendance/store',[Attendance::class,'attendance_store'])->name('attendance.store');
Route::get('/import_product',[ProductController::class,'import_product'])->name('import.product');
Route::get('/users/export/', [ProductController::class, 'export'])->name('export');
Route::post('/users/import/', [ProductController::class, 'import'])->name('import');
Route::get('/pos',[PosController::class,'pos'])->name('pos');

require __DIR__.'/auth.php';
