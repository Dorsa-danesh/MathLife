<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about' , function(){
    return view('about');
});

Route::post('/logout' , [AuthController::class,'logout'])->name('logout')->middleware('auth');
Route::middleware('guest')->controller(AuthController::class)->group(function(){
    Route::get('/register' , 'showRegister')->name('show.register');
    Route::get('/login' , 'showLogin')->name('show.login');
    Route::post('/register' ,'register')->name('register');
    Route::post('/login' , 'login')->name('login');
});
Route::get('/lessons', [QuestionController::class , 'lessons'])->middleware('auth');
Route::get('/exam', [QuestionController::class , 'exam'])->middleware('auth');
Route::post('/exam', [QuestionController::class , 'examFun'])->name('exam.submit')->middleware('auth');
