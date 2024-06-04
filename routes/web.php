<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
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







Route::post('/test',function(Request $request){

    $data = [

        'firstName' => $request->input('firstName'),
        'middleName' => $request->input('middleName'),
        'lastName' => $request->input('lastName'),
        'gender' => $request->input('gender'),
        'age' => $request->input('age'),
        'address' => $request->input('address'),
        'religion' => $request->input('religion'),
        'POB' => $request->input('POB'),
        'DOB' => $request->input('DOB'),
        'idType' => $request->input('idType'),
        'idNumber' => $request->input('idNumber'),
        'occupation' => $request->input('occupation'),
        'employment-status' => $request->input('employment-status'),
        'educational-attainment' => $request->input('educational-attainment'),
        'contactNumber' => $request->input('contactNumber'),
        'facebook-account' => $request->input('facebook-account'),
        'email' => $request->input('email'),
        'nameOfEmployer' => $request->input('nameOfEmployer'),
        'addressOfEmployer' => $request->input('addressOfEmployer'),
        'monthlyIncome' => $request->input('monthlyIncome'),
        'annualIncome' => $request->input('annualIncome'),
        'house-ownership' => $request->input('house-ownership'),
        'citizenship' => $request->input('citizenship'),
        'civilStatus' => $request->input('civilStatus'),
        'place-of-marriage' => $request->input('place-of-marriage'),
        'date-of-marriage' => $request->input('date-of-marriage'),
        'spouse-name' => $request->input('spouse-name'),
        'place-of-birth' => $request->input('place-of-birth'),
        'educational-attainmentSpouse' => $request->input('educational-attainmentSpouse'),
        'occupationSpouse' => $request->input('occupationSpouse'),
    ];

    return view('showRegistration',compact('data'));
})->name('fetch');





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















//             'name'=> $request->name,
//             'password'=> $request->password,
//             'email'=> $request->email,

//         ];


//         return view('test',compact('data'));


// })->name('store');


// Route::get('/register', function () {
//     return view('Home.registration');
//     });
