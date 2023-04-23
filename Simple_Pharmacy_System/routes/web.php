<?php

use App\Http\Controllers\PharmacyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PharmacyOwnerController;
use App\Http\Controllers\DoctorController;
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
    return view('dashboard.reports');
});

Route::prefix('dashboard')->group(function () {
    //*************pharmacy owner routes */
    Route::get('/pharmacyOwners', [PharmacyOwnerController::class, 'index'])->name('pharmacyOwners.index');
    Route::get('/pharmacyOwners/create', [PharmacyOwnerController::class, 'create'])->name('pharmacyOwners.create');
    Route::post('/pharmacyOwners', [PharmacyOwnerController::class, 'store'])->name('pharmacyOwners.store');
    Route::get('/pharmacyOwners/{pharmacyOwner}', [PharmacyOwnerController::class, 'show'])->name('pharmacyOwners.show');
    Route::get('/pharmacyOwners/{pharmacyOwner}/edit', [PharmacyOwnerController::class, 'edit'])->name('pharmacyOwners.edit');
    Route::put('/pharmacyOwners/{pharmacyOwner}', [PharmacyOwnerController::class, 'update'])->name('pharmacyOwners.update');
    Route::delete('/pharmacyOwners/{pharmacyOwner}', [PharmacyOwnerController::class, 'destroy'])->name('pharmacyOwners.destroy');

    //**************doctor routes******************
    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
    Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
    Route::get('/doctors/{doctor}', [DoctorController::class, 'show'])->name('doctors.show');
    Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
    Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('doctors.update');
    Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])->name('doctors.destroy');

    //**************users routes******************
    Route::get('/users', [UserController::class, 'index'])->name('dashboard.users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('dashboard.users.create');
    Route::post('/users', [UserController::class, 'store'])->name('dashboard.users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('dashboard.users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('dashboard.users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('dashboard.users.destroy');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('dashboard.users.show');

    //**************pharmacy routes******************
    Route::get('/pharmacy', [PharmacyController::class, 'index'])->name('dashboard.pharmacy.index');
    Route::get('/pharmacy/create', [PharmacyController::class, 'create'])->name('dashboard.pharmacy.create');
    Route::post('/pharmacy', [PharmacyController::class, 'store'])->name('dashboard.pharmacy.store');
    Route::get('/pharmacy/{pharmacy}/edit', [PharmacyController::class, 'edit'])->name('dashboard.pharmacy.edit');
    Route::put('/pharmacy/{pharmacy}', [PharmacyController::class, 'update'])->name('dashboard.pharmacy.update');
    Route::delete('/pharmacy/{pharmacy}', [PharmacyController::class, 'destroy'])->name('dashboard.pharmacy.destroy');
    Route::get('/pharmacy/{pharmacy}', [PharmacyController::class, 'show'])->name('dashboard.pharmacy.show');

    //**************medicine routes******************
    Route::get('/medicine', [MedicineController::class, 'index'])->name('dashboard.medicine.index');
    Route::get('/medicine/create', [MedicineController::class, 'create'])->name('dashboard.medicine.create');
    Route::post('/medicine', [MedicineController::class, 'store'])->name('dashboard.medicine.store');
    Route::get('/medicine/{medicine}/edit', [MedicineController::class, 'edit'])->name('dashboard.medicine.edit');
    Route::put('/medicine/{medicine}', [MedicineController::class, 'update'])->name('dashboard.medicine.update');
    Route::delete('/medicine/{medicine}', [MedicineController::class, 'destroy'])->name('dashboard.medicine.destroy');
    Route::get('/medicine/{medicine}', [MedicineController::class, 'show'])->name('dashboard.medicine.show');
});
