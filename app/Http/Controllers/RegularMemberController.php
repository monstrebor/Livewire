<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Services\RegularMemberService;

class RegularMemberController extends Controller
{

    public function store(Request $request, RegularMemberService $regularMemberService)
    {

        $regularMemberService->RegularMemberStore($request);

        // redirect route
        // return $request->all();

    }





}
