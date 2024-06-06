<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegularMemberController;
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


// Route::get('/register/submit',function(){

//     return view('Home.Pre-Member.FormSubmit');

// })->name('form.submit');



//error

Route::fallback([ErrorController::class,'custom_404']);





// email pre-membership controller

Route::post('/success',[UserEmailController::class,'PreMemberEmail'])->name('pre-membership.email');


Route::get('/regularMember',[RegularMemberController::class, 'index'])->name('regularMember.index');
Route::get('/regularMember/create',[RegularMemberController::class, 'create'])->name('regularMember.create');
Route::post('/regularMember',[RegularMemberController::class, 'store'])->name('regularMember.store');
// Route::resource('/regularMember', RegularMemberController::class);

Route::post('/regularMemberForm',function(Request $request, RegularMemberController $regular, UserEmailController $email){

    $regular->store($request);
    $email->PreMemberEmail($request);

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
        'employment_status' => $request->input('employment_status'),
        'educational_attainment' => $request->input('educational_attainment'),
        'contactNumber' => $request->input('contactNumber'),
        'facebook_account' => $request->input('facebook_account'),
        'email' => $request->input('email'),
        'nameOfEmployer' => $request->input('nameOfEmployer'),
        'addressOfEmployer' => $request->input('addressOfEmployer'),
        'monthlyIncome' => $request->input('monthlyIncome'),
        'annualIncome' => $request->input('annualIncome'),
        'house_ownership' => $request->input('house_ownership'),
        'citizenship' => $request->input('citizenship'),
        'no_of_children' => $request->input('no_of_children'),
        'civilStatus' => $request->input('civilStatus'),
        'place_of_marriage' => $request->input('place_of_marriage'),
        'date_of_marriage' => $request->input('date_of_marriage'),
        'spouse_name' => $request->input('spouse_name'),
        'place_of_birth' => $request->input('place_of_birth'),
        'educational_attainmentSpouse' => $request->input('educational_attainmentSpouse'),
        'occupationSpouse' => $request->input('occupationSpouse'),
    ];

    return view('PDF.regularMemberForm',compact('data'));

})->name('fetch');





//test


Route::get('/place',function(){

    return view('Home.place');

    
})->name('place');




