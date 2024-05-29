<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
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


Route::get('/',[HomeController::class,'Homepage'])->name('Home.index');
Route::get('/login',[HomeController::class,'Login'])->name('Login.index');




//error

Route::fallback([ErrorController::class,'custom_404']);


Route::get('/test', function (Request $request) {


        $data = [

            'name'=> $request->name,
            'password'=> $request->password,
            'email'=> $request->email,

        ];


        return view('test',compact('data'));


})->name('store');


Route::get('/register', function () {
    return view('Home.registration');
    });
