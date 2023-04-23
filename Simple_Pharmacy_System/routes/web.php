<?php

use App\Http\Controllers\PharmacyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MedicineController;
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
    return view('dashboard.index');
});

Route::prefix('dashboard')->group(function(){
    Route::get('/users', [UserController::class,'index'])->name('dashboard.users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('dashboard.users.create');
    Route::post('/users', [UserController::class, 'store'])->name('dashboard.users.store');
    Route::get('/users/{post}/edit', [UserController::class, 'edit']) ->name('dashboard.users.edit');
    Route::put('/users/{post}', [UserController::class, 'update']) ->name('dashboard.users.update');
    Route::delete('/users/{post}', [UserController::class, 'destroy'])->name('dashboard.users.destroy');
    Route::get('/users/{post}', [UserController::class, 'show'])->name('dashboard.users.show');


    Route::get('/pharmacy', [PharmacyController::class, 'index'])->name('dashboard.pharmacy.index');
    Route::get('/pharmacy/create', [PharmacyController::class, 'create'])->name('dashboard.pharmacy.create');
    Route::post('/pharmacy', [PharmacyController::class, 'store'])->name('dashboard.pharmacy.store');
    Route::get('/pharmacy/{comment}/edit', [PharmacyController::class, 'edit']) ->name('dashboard.pharmacy.edit');
    Route::put('/pharmacy/{comment}', [PharmacyController::class, 'update']) ->name('dashboard.pharmacy.update');
    Route::delete('/pharmacy/{comment}', [PharmacyController::class, 'destroy'])->name('dashboard.pharmacy.destroy');
    Route::get('/pharmacy/{comment}', [PharmacyController::class, 'show'])->name('dashboard.pharmacy.show');

    Route::get('/medicine', [MedicineController::class, 'index'])->name('dashboard.medicine.index');
    Route::get('/medicine/create', [MedicineController::class, 'create'])->name('dashboard.medicine.create');
    Route::post('/medicine', [MedicineController::class, 'store'])->name('dashboard.medicine.store');
    Route::get('/medicine/{comment}/edit', [MedicineController::class, 'edit']) ->name('dashboard.medicine.edit');
    Route::put('/medicine/{comment}', [MedicineController::class, 'update']) ->name('dashboard.medicine.update');
    Route::delete('/medicine/{comment}', [MedicineController::class, 'destroy'])->name('dashboard.medicine.destroy');
    Route::get('/medicine/{comment}', [MedicineController::class, 'show'])->name('dashboard.medicine.show');

} );
