<?php

namespace App\Http\Controllers;

use App\Models\RegularMember;
use Illuminate\Http\Request;

class RegularMemberController extends Controller
{
    public function index()
    {
        $regular_members = RegularMember::all();
        return view('Admin.Member', ['regular_members' => $regular_members]);
    }
}
