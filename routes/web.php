<?php

use App\Models\Student;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\kelazController;
use App\Models\kelaz;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome', [
        'title' => "welcome"
    ]);
});

Route::get('/student/all', [StudentController::class, 'index']);
Route::get('/student/detail/{student}', [StudentController::class, 'show'])->name('students.show');

Route::get('/student/add', [StudentController::class, 'create']);
Route::post('/student/store', [StudentController::class, 'store']);


Route::get('/student/delete/{id}', [StudentController::class, 'destroy']);

Route::delete('/student/delete/{id}', [StudentController::class, 'destroy']);

Route::get('/student/edit', [StudentController::class, 'edit']);
Route::get('/student/edit/{student}', [StudentController::class, 'edit'])->name('students.edit');

Route::get('/student/edit/{student}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/student/update/{student}', [StudentController::class, 'update'])->name('students.update');
Route::get('/student/detail/{student}', [StudentController::class, 'showDetail'])->name('students.detail');







Route::get('/kelaz/all', [KelazController::class, 'index']);
Route::get('/kelaz/add', [KelazController::class, 'create']);
Route::post('/kelaz/store', [KelazController::class, 'store']);
Route::get('/kelaz/delete/{id}', [KelazController::class, 'destroy']);

Route::get('/kelaz/edit/{kelaz}', [kelazController::class, 'edit']);
Route::post('/kelaz/submit/{kelaz}', [KelazController::class, 'update']);
Route::get('/kelaz/detail/{kelaz}', [KelazController::class, 'showDetail'])->name('kelaz.show');


