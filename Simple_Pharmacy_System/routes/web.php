<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PharmacyOwnerController;
use App\Http\Controllers\DoctorController;
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
