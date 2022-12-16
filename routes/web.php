<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/', [DashboardController::class, 'show'])->name('dashboard');

Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration/store', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::post('/login/store', [RegistrationController::class, 'login_store'])->name('login.store');
Route::get('/delete/registration/{id}', [RegistrationController::class, 'delete'])->name('delete.registration');
Route::get('/edit/{id}', [RegistrationController::class, 'edit'])->name('edit.registration');
Route::post('edit/update/{id}', [RegistrationController::class, 'update'])->name('update.registration');



Route::get('/admin', [RegistrationController::class, 'show'])->name('admin');


Route::get('/add', [DashboardController::class,'add_task'])->name('add.task');
Route::post('/add/store', [DashboardController::class,'store_task'])->name('store.task');
Route::get('/delete/{id}', [DashboardController::class, 'delete'])->name('delete.task');
