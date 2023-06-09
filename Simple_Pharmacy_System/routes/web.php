<?php

use App\Http\Controllers\PharmacyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PharmacyOwnerController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserAddressController;

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
//    Route::get('/pharmacyOwners', [PharmacyOwnerController::class, 'index'])->name('pharmacyOwners.index');
//    Route::get('/pharmacyOwners/create', [PharmacyOwnerController::class, 'create'])->name('pharmacyOwners.create');
//    Route::post('/pharmacyOwners', [PharmacyOwnerController::class, 'store'])->name('pharmacyOwners.store');
//    Route::get('/pharmacyOwners/{pharmacyOwner}', [PharmacyOwnerController::class, 'show'])->name('pharmacyOwners.show');
//    Route::get('/pharmacyOwners/{pharmacyOwner}/edit', [PharmacyOwnerController::class, 'edit'])->name('pharmacyOwners.edit');
//    Route::put('/pharmacyOwners/{pharmacyOwner}', [PharmacyOwnerController::class, 'update'])->name('pharmacyOwners.update');
//    Route::delete('/pharmacyOwners/{pharmacyOwner}', [PharmacyOwnerController::class, 'destroy'])->name('pharmacyOwners.destroy');

    Route::resource('pharmacyOwners', PharmacyOwnerController::class);

    //**************doctor routes******************
//    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
//    Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
//    Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
//    Route::get('/doctors/{doctor}', [DoctorController::class, 'show'])->name('doctors.show');
//    Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
//    Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('doctors.update');
//    Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])->name('doctors.destroy');
    Route::resource('doctors', DoctorController::class);
    Route::put('/doctors/{doctor}/ban', [DoctorController::class, 'banned'])->name('doctors.banned');
    Route::put('/doctors/{doctor}/unban', [DoctorController::class, 'unbanned'])->name('doctors.unbanned');

    //**************users routes******************
//    Route::get('/users', [UserController::class, 'index'])->name('users.index');
//    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//    Route::post('/users', [UserController::class, 'store'])->name('users.store');
//    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
//    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
//    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
//    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::resource('users', UserController::class);
    //**************pharmacy routes******************
//    Route::get('/pharmacy', [PharmacyController::class, 'index'])->name('pharmacy.index');
//    Route::get('/pharmacy/create', [PharmacyController::class, 'create'])->name('pharmacy.create');
//    Route::post('/pharmacy', [PharmacyController::class, 'store'])->name('pharmacy.store');
//    Route::get('/pharmacy/{pharmacy}/edit', [PharmacyController::class, 'edit'])->name('pharmacy.edit');
//    Route::put('/pharmacy/{pharmacy}', [PharmacyController::class, 'update'])->name('pharmacy.update');
//    Route::delete('/pharmacy/{pharmacy}', [PharmacyController::class, 'destroy'])->name('pharmacy.destroy');
//    Route::get('/pharmacy/{pharmacy}', [PharmacyController::class, 'show'])->name('pharmacy.show');

    Route::resource('pharmacy', PharmacyController::class);

    //**************medicine routes******************
//    Route::get('/medicine', [MedicineController::class, 'index'])->name('medicine.index');
//    Route::get('/medicine/create', [MedicineController::class, 'create'])->name('medicine.create');
//    Route::post('/medicine', [MedicineController::class, 'store'])->name('medicine.store');
//    Route::get('/medicine/{medicine}/edit', [MedicineController::class, 'edit'])->name('medicine.edit');
//    Route::put('/medicine/{medicine}', [MedicineController::class, 'update'])->name('medicine.update');
//    Route::delete('/medicine/{medicine}', [MedicineController::class, 'destroy'])->name('medicine.destroy');
//    Route::get('/medicine/{medicine}', [MedicineController::class, 'show'])->name('medicine.show');

    Route::resource('medicine', MedicineController::class);

    //**************Pharmacy Area routes******************
    Route::get('/area', [AreaController::class, 'index'])->name('dashboard.area.index');
    Route::get('/area/create', [AreaController::class, 'create'])->name('dashboard.area.create');
    Route::post('/area', [AreaController::class, 'store'])->name('dashboard.area.store');
    Route::get('/area/{area}/edit', [AreaController::class, 'edit'])->name('dashboard.area.edit');
    Route::put('/area/{area}', [AreaController::class, 'update'])->name('dashboard.area.update');
    Route::delete('/area/{area}', [AreaController::class, 'destroy'])->name('dashboard.area.destroy');
    Route::get('/area/{area}', [AreaController::class, 'show'])->name('dashboard.area.show');

    //**************order routes******************
    Route::get('/order', [OrderController::class, 'index'])->name('dashboard.order.index');
    Route::get('/order/create', [OrderController::class, 'create'])->name('dashboard.order.create');
    Route::post('/order', [OrderController::class, 'store'])->name('dashboard.order.store');
    Route::get('/order/{order}/edit', [OrderController::class, 'edit'])->name('dashboard.order.edit');
    Route::put('/order/{order}', [OrderController::class, 'update'])->name('dashboard.order.update');
    Route::delete('/order/{order}', [OrderController::class, 'destroy'])->name('dashboard.order.destroy');
    Route::get('/order/{order}', [OrderController::class, 'show'])->name('dashboard.order.show');

    //**************admin routes******************
    Route::get('/admin/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{admin}', [AdminController::class, 'update'])->name('admin.update');
    Route::get('/admin/{admin}', [AdminController::class, 'show'])->name('admin.show');

    //*************** report routes ******************************

    //**************admin routes******************
    Route::resource('userAddress', UserAddressController::class);
});
