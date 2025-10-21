<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});