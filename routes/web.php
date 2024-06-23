<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\RegularMemberController;
use App\Http\Controllers\IdValidationController;
use Illuminate\Support\Facades\Artisan;





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




//Home

Route::view('/', 'Home.index')->name('Home.index');
Route::view('/Membership','Home.onlineMembership')->name('Home.Membership');
Route::view('/Loan-Products','Home.loanProducts')->name('Home.LoanProducts');
Route::view('/Product-Savings','Home.savingsProduct')->name('Home.SavingsProduct');
Route::view('/login','Home.login')->name('Login.index');
Route::view('/login/register/','Home.test')->name('regular.register');
Route::post('/regular',[RegularMemberController::class, 'store'])->name('regular.store');


//Admin

Route::view('/admin','Admin.Index')->name('Admin.index');




//Error

Route::fallback([ErrorController::class,'custom_404']);


//cache

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('optimize');
    Artisan::call('view:clear');


    return 'successfully!';

});


//image
Route::get('/image',[idValidationController::class, 'index'])->name('id.index');


Route::get('/test',[RegularMemberController::class, 'show']);













