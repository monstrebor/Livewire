<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\RegularMemberController;
use App\Http\Controllers\DownloadController;
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
Route::view('/FAQ','Home.FAQs')->name('Home.FAQ');
Route::view('/Downloads','Home.download')->name('Home.Download');
Route::view('/login','Home.login')->name('Login.index');
Route::view('/login/register/','Home.regForm')->name('regular.register');


// form (Regular)
Route::post('/Regform',[RegularMemberController::class, 'store'])->name('regular.store');



//Admin (Manager)

Route::view('/admin','Admin.Index')->name('Admin.index');


//User (Associate)

Route::view('/associate/home','Associate.Index')->name('Associate.index');


//User (Regular)

Route::view('/regular/home','Regular.Index')->name('Regular.index');


// User (Cashier)

Route::view('/cashier/home','Cashier.Index')->name('Cashier.index');



//Error

Route::fallback([ErrorController::class,'pageNotFound'])->name('Error.PageNotFound');
Route::get('/download/primer',[ErrorController::class,'primerDownload'])->name('download.primer');


//cache

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('optimize');
    Artisan::call('route:cache');
    Artisan::call('view:clear');


    return back();

});



//downloads

Route::get('/download/primer',[DownloadController::class,'primerDownload'])->name('download.primer');
Route::get('/download/regularForm',[DownloadController::class,'regularFormDownload'])->name('download.regularForm');









