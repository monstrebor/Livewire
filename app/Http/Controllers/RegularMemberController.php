<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegularMember;
class RegularMemberController extends Controller
{
    public function index()
    {
        $regularMembers = RegularMember::all();
        return view('RegularMembers.index', ['regularMembers' => $regularMembers]);
    }
    public function create()
    {
        return view('RegularMembers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'address' => 'required',
            'religion' => 'required',
            'POB' => 'required',
            'DOB' => 'required',
            'idType' => 'required',
            'idNumber' => 'required',
            'occupation' => 'required',
            'employment_status' => 'required',
            'educational_attainment' => 'required',
            'contactNumber' => 'required',
            'facebook_account' => 'required',
            'email' => 'required',
            'nameOfEmployer' => 'required',
            'addressOfEmployer' => 'required',
            'monthlyIncome' => 'required',
            'annualIncome' => 'required',
            'house_ownership' => 'required',
            'citizenship' => 'required',
            'civilStatus' => 'required',
            'place_of_marriage' => 'required',
            'date_of_marriage' => 'required',
            'spouse_name' => 'required',
            'place_of_birth' => 'required',
            'educational_attainmentSpouse' => 'required',
            'occupationSpouse' => 'required',
        ]);

        $newRegularMember = RegularMember::create($data);
    }
}
