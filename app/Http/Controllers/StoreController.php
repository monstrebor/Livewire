<?php

namespace App\Http\Controllers;
use App\Services\RegularMemberService;
use \App\Http\Requests\StoreRegularForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function storeForm(StoreRegularForm $request, RegularMemberService $regularMemberService)
    {

        $regularMemberService->RegularMemberStore($request);

        // // redirect route
        return $request->all();

    }

    public function storeLogin(Request $request){






        $credentials = $request->only('email','password');




        if(auth()->attempt($credentials)  == true){


            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->intended('/admin/home');
            } elseif ($user->role == 'associate') {
                return redirect()->intended('/associate/home');
            } elseif ($user->role == 'regular') {
                return redirect()->intended('/regular/home');
            } elseif ($user->role == 'cashier') {
                return redirect()->intended('/cashier/home');
            }

        }

        return redirect('/login')->with('error','Username and password incorrect');


    }



}
