<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin_home',[AdminController::class,'home']);
Route::get('/doctors',[DoctorController::class,'view_doctors'])->name('doctors');
Route::get('/add_doctors',[DoctorController::class,'add_doctor'])->name('add_doctor');
Route::post('/add_doctors',[DoctorController::class,'add_doctor_submit'])->name('add_doctor_submit');