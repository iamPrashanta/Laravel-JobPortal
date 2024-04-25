<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestEmail;
use App\Http\Controllers\PdfController;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;



// for using only index route
// Route::resource('/', JobController::class)->only('index');
Route::resource('/', JobController::class);

Route::get('/test', [TestController::class, 'test'])->middleware('userLogin')->name('test');





Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/getDbData/{sid}', [TestController::class, 'getDbData'])->where(['sid'=>'[0-9]+'])->middleware('auth.check');


// for sending email
Route::get('email-test', [TestEmail::class, 'emailtest']);


// get orders
Route::get('/orders-list', [PdfController::class, 'show']);
// genarate pdf
Route::get('/generate-pdf', [PdfController::class, 'generatePDF']);