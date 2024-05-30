<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserEmailController;




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

//views

Route::get('/',[HomeController::class,'Homepage'])->name('Home.index');
Route::get('/login',[HomeController::class,'Login'])->name('Login.index');


Route::get('/register',function(){

    return view('home.registration_try');

});


Route::get('/register/submit',function(){

    return view('Home.Pre-Member.FormSubmit');

})->name('form.submit');





//error

Route::fallback([ErrorController::class,'custom_404']);




// email pre-membership controller

Route::post('/success',[UserEmailController::class,'PreMemberEmail'])->name('pre-membership.email');







// Route::post('/test',function(Request $request){

//     $data = [

//         'name' => $request->input('firstname'),
//         'middlename' => $request->input('middlename'),
//         'lastname' => $request->input('lastname'),
//         'email'=>$request->input('email'),
//         'address' => $request->input('address'),
//         'contactnumber'=>$request->input('contactnumber'),
//         'dob'=>$request->input('dob'),
//         'occupation'=> $request->input('occupation'),
//         'civilstatus' => $request->input('civilstatus'),
//     ];

//     return view('try',compact('data'));

// })->name('fetch');





// Route::get('/form', function(){

//     return view('sample');

// });



// Route::get('/send-email', function () {


//     $content= [
//         'body'=>'PRE-MEMBER REGISTRATION',
//         'content'=> "You are now a member of MNSMPC. Please don't reply on this mail.",
//     ];

//     $subject = ['title'=>'Pre-Membership Registration'];

//     Mail::to('carljameslangres@gmail.com')->send(new SampleEmail($content,$subject)); // key of sending info.
//     return "Email sent successfully!";

// });















