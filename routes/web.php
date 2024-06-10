<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegularMemberController;
use Illuminate\Http\Request;
use App\Http\Controllers\UserEmailController;
use Illuminate\Support\Facades\Http;




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

//error

Route::fallback([ErrorController::class,'custom_404']);


// email pre-membership controller

Route::post('/success',[UserEmailController::class,'PreMemberEmail'])->name('pre-membership.email');

// pre-membership (Regulars)

Route::get('/regularMember',[RegularMemberController::class, 'index'])->name('regularMember.index');
Route::get('/regularMember/create',[RegularMemberController::class, 'create'])->name('regularMember.create');
Route::post('/regularMembers',[RegularMemberController::class, 'store'])->name('regularMember.store');



Route::get('/place',function(){


return view('Home.place');

})->name('place');




// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;

// class AddressController extends Controller
// {
//     public function index()
//     {
//         // Make a GET request to the API endpoint to fetch address data
//         $response = Http::get('https://api.example.com/addresses');

//         // Check if the request was successful
//         if ($response->successful()) {
//             // Retrieve the address data from the API response
//             $addresses = $response->json();

//             // Pass the address data to the view
//             return view('addresses.index', compact('addresses'));
//         } else {
//             // Handle the case where the API request fails
//             return back()->withError('Failed to fetch address data from API');
//         }
//     }
// }






// api address
Route::get('/test',function(){


        $response = Http::get('https://psgc.cloud/api/regions');

        // Check if the request was successful
        if ($response->successful()) {
            // Retrieve the address data from the API response
            $addresses = $response->json();

            // Pass the address data to the view
            return view('home.place', compact('addresses'));

        } else {
            // Handle the case where the API request fails
            return back()->withError('Failed to fetch address data from API');

        }

});



//picture


    Route::get('/pic',function(){


        return view('home.picture');

    });



    Route::post('/pic2',function(Request $request){


        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension(); // time and extension
        $request->image->move(storage_path('app/public/images/'), $imageName); // moving to the other path and the file name


        return view('home.picture2',compact('imageName') );


    })->name('image');
