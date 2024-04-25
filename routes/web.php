<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestEmail;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


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


// for using only index route
// Route::resource('/', JobController::class)->only('index');
Route::resource('/', JobController::class);
Route::get('/test', [TestController::class, 'test'])->middleware('userLogin')->name('test');





Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/getDbData/{sid}', [TestController::class, 'getDbData'])->where(['sid'=>'[0-9]+'])->middleware('auth.check');

Route::get('mailtest', [TestEmail::class, 'mailtest']);