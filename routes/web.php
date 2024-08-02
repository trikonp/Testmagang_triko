<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});


Route::middleware(['auth', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/employess', [EmployeesController::class, 'index'])->middleware(['auth', 'verified'])->name('employess');

Route::get('/departement', [DepartementController::class, 'index'])->middleware(['auth', 'verified'])->name('departement');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/departement/tambah', [DepartementController::class, 'tambah']);
    Route::post('/departement/proses', [DepartementController::class, 'proses']);
    Route::get('/departement/edit/{id}', [DepartementController::class, 'edit']);
    Route::get('/departement/update/{id}', [DepartementController::class, 'update']);
    Route::get('/departement/hapus/{id}', [DepartementController::class, 'hapus']);

    Route::get('/employess/tambah', [EmployeesController::class, 'tambah']);
    Route::post('/employess/proses', [EmployeesController::class, 'proses']);
    Route::get('/employess/edit/{id}', [EmployeesController::class, 'edit']);
    Route::get('/employess/update/{id}', [EmployeesController::class, 'update']);
    Route::get('/employess/hapus/{id}', [EmployeesController::class, 'hapus']);
});



require __DIR__ . '/auth.php';
