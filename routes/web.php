<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf as PDF;

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



// pdf test controller


Route::post('/pdf',function(Request $request){

    {
        $data = [
            'title' => 'MNSMPC',
            'name' => $request->input('firstname'),
            'middlename' => $request->input('middlename'),
            'lastname' => $request->input('lastname'),
            'email'=>$request->input('email'),
            'address' => $request->input('address'),
            'contactnumber'=>$request->input('contactnumber'),
            'dob'=>$request->input('dob'),
            'gender'=> $request->input('gender'),
            'occupation'=> $request->input('occupation'),
            'civilstatus' => $request->input('civilstatus'),
        ];
    

        $pdf = PDF::loadView('PDF.try', $data);
        return $pdf->download('document.pdf');


    }

})->name('generate');

Route::get('/register',function(){

    return view('home.registration_try');

});


Route::post('/test',function(Request $request){

    $data = [

        'name' => $request->input('firstname'),
        'middlename' => $request->input('middlename'),
        'lastname' => $request->input('lastname'),
        'email'=>$request->input('email'),
        'address' => $request->input('address'),
        'contactnumber'=>$request->input('contactnumber'),
        'dob'=>$request->input('dob'),
        'occupation'=> $request->input('occupation'),
        'civilstatus' => $request->input('civilstatus'),
    ];

    return view('try',compact('data'));

})->name('fetch');














