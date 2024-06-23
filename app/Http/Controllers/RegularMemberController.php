<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreRegularForm;
use App\Models\{RegularMember};
use App\Services\RegularMemberService;

class RegularMemberController extends Controller
{


    public function store(StoreRegularForm $request, RegularMemberService $regularMemberService)
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
