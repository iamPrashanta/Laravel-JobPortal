<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestUserController;
use App\Http\Controllers\TestEmail;
use App\Http\Controllers\PdfController;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;



// for using only index route
// Route::resource('/', JobController::class)->only('index');
Route::resource('/', JobController::class);

// deleted
// Route::get('/test', [TestController::class, 'test'])->middleware('userLogin')->name('test');


// get orders
Route::get('/orders-list', [PdfController::class, 'show']);
// genarate pdf
Route::get('/generate-pdf', [PdfController::class, 'generatePDF']);






Route::get('/login', [TestUserController::class, 'login'])->name('user.login');
Route::post('/login', [TestUserController::class, 'loginSubmit'])->name('user.login.submit');
Route::get('/signup', [TestUserController::class, 'signup'])->name('user.signup');
Route::post('/signup', [TestUserController::class, 'signupSubmit'])->name('user.signup.submit');

Route::get('/dashboard', [TestUserController::class, 'dashboard'])->name('user.dashboard');

Route::get('/session', [TestUserController::class, 'sessionCheck']);
Route::get('/logout', [TestUserController::class, 'destroy']);

// deleted
// Route::get('/getDbData/{sid}', [TestController::class, 'getDbData'])->where(['sid'=>'[0-9]+'])->middleware('auth.check');


