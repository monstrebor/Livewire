<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\StoreController;
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
Route::group(['middleware' => 'guests'], function () {

Route::view('/', 'Home.index')->name('Home.index');
Route::view('/Membership','Home.onlineMembership')->name('Home.Membership');
Route::view('/Loan-Products','Home.loanProducts')->name('Home.LoanProducts');
Route::view('/Product-Savings','Home.savingsProduct')->name('Home.SavingsProduct');
Route::view('/FAQ','Home.FAQs')->name('Home.FAQ');
Route::view('/Downloads','Home.download')->name('Home.Download');
Route::view('/login','Home.login')->name('Login.index');
Route::view('/login/register/','Home.regForm')->name('regular.register');
Route::view('/login/associate/','Home.assocForm')->name('regular.associate');
});


Route::post('/register',[StoreController::class, 'storeForm'])->name('regular.store');
Route::post('/login',[StoreController::class,'storeLogin'])->name('login.store');



//Admin (Manager)
Route::group(['middleware' => 'admin'], function () {

Route::view('/admin/home','Admin.Index')->name('Admin.index');


});

//User (Associate)
Route::group(['middleware' => 'associate'], function () {


Route::view('/associate/home','Associate.Index')->name('Associate.index');


});




//User (Regular)
Route::group(['middleware' => 'regular'], function () {


Route::view('/regular/home','Regular.Index')->name('Regular.index');


});


// User (Cashier)
Route::group(['middleware' => 'cashier'], function () {

Route::view('/cashier/home','Cashier.Index')->name('Cashier.index');

});



//Error

Route::fallback([ErrorController::class,'pageNotFound'])->name('Error.PageNotFound');


//cache

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('optimize');
    Artisan::call('route:cache');
    Artisan::call('view:clear');


    return back();

});

//logout

Route::get('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');

})->name('logout');




//downloads

Route::get('/download/primer',[DownloadController::class,'primerDownload'])->name('download.primer');
Route::get('/download/regularForm',[DownloadController::class,'regularFormDownload'])->name('download.regularForm');
Route::get('/download/associateForm',[DownloadController::class,'associateFormDownload'])->name('download.associate');








