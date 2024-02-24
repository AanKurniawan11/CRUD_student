<?php

use App\Http\Controllers\DasboardStudentController;
use App\Http\Controllers\dashboard as ControllersDashboard;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use App\Models\Student;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\kelazController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignController;
use App\Models\kelaz;
use App\Models\Sign;
use Illuminate\Routing\Route as RoutingRoute;
// ude App\Http\Controllers\
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])-> name("login")->middleware("guest");
Route::post('/login/add', [SignController::class, 'authenticate']);

Route::get('/signin', [SignController::class, 'index']);
Route::post('/signin/add', [SignController::class, 'store']);


Route::post('/logout',[LoginController::class,'logout']);

Route::get('/dash', [dashboardController::class, 'index'])->middleware('auth');
Route::get('/dash/student', [dashboardController::class, 'index'])->middleware('auth');



Route::group(["prefix" => "/student"],function(){
    Route::get('/all', [StudentController::class, 'index'])->middleware('guest');
    Route::get('/detail/{student}', [StudentController::class, 'showDetail'])->name('students.detail')->middleware('guest');
    Route::get('/add', [StudentController::class, 'create'])->middleware('auth');
    Route::post('/store', [StudentController::class, 'store'])->middleware('auth');
    Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('students.edit')->middleware('auth');
    Route::put('/update/{student}', [StudentController::class, 'update'])->name('students.update')->middleware('auth');
});

Route::group(["prefix" => "/kelaz"],function(){
    Route::get('/all', [KelazController::class, 'index']);
    Route::get('/detail/{kelaz}', [KelazController::class, 'showDetail'])->name('kelaz.show');
    Route::get('/add', [KelazController::class, 'create']);
    Route::post('/store', [KelazController::class, 'store']);
    Route::get('/delete/{id}', [KelazController::class, 'destroy']);
    Route::get('/edit/{kelaz}', [kelazController::class, 'edit']);
    Route::post('/submit/{kelaz}', [KelazController::class, 'update']);

});



Route::group(["prefix"=>"/dash"],function(){
    Route::get('/siswa/all', [DasboardStudentController::class, 'index'])->middleware('auth');
    Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->middleware('auth');
    Route::get("/filter",[DasboardStudentController::class,'filter'])->middleware('auth');

});

Route::get('dash/siswa/add', [DasboardStudentController::class, 'create'])->middleware('auth');
Route::get('dash/siswa/detail/{student}', [DasboardStudentController::class, 'showDetail'])->name('students.detail');
Route::get('dash/siswa/edit/{student}', [DasboardStudentController::class, 'edit'])->name('students.edit');
Route::put('dash/siswa/update/{student}', [DasboardStudentController::class, 'update'])->name('students.update');
Route::get('dash/siswa/delete/{id}', [DasboardStudentController::class, 'destroy']);

