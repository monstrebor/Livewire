<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{RegularMember};
use App\Services\RegularMemberService;

class RegularMemberController extends Controller
{

    public function store(Request $request, RegularMemberService $regularMemberService)
    {

        $regularMemberService->RegularMemberStore($request);

        // // redirect route
        // return $request->all();

    }


    public function show(){


       $test = RegularMember::with('marriage')->find(1);


        return $test->marriage->placeOfMarriage;

    }





}
