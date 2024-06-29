<?php

namespace App\Http\Controllers;
use App\Services\RegularMemberService;
use \App\Http\Requests\StoreRegularForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

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

        if(auth()->attempt($credentials)){

            $user = Auth::user();

            // session([$request->all()]); // login information

            switch ($user->role) {
                case 'admin':
                    return redirect()->intended('/admin/home');
                case 'associate':
                    return redirect()->intended('/associate/home');
                case 'regular':
                    return redirect()->intended('/regular/home');
                case 'cashier':
                    return redirect()->intended('/cashier/home');
                default:
                    return redirect('/login')->with('error', 'Role not recognized');
            }
        }

        return redirect('/login')->with('error','Username and password incorrect');


        }

}
