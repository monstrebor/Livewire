<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitationEmails;
use App\Models\RegularMember;
use App\Models\Dependency;

class RegularMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('Home.test');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        // Create a new RegularMember instance
        $regular = RegularMember::create($data);

        // Get the ID of the newly created RegularMember
        $regular_id = $regular->id;

        // Create a new Dependency instance
        $dependentNames = $request->Dependent_name;
        $dependentDOBs = $request->Dependent_dob;

    
        foreach ($dependentNames as $index => $name) {
            $dob = $dependentDOBs[$index];

            // Create a new Dependency instance for each name and date of birth
            Dependency::create([
                'Dependent_name' => $name,
                'Dependent_dob' => $dob,
                'Reg_ID' => $regular_id,
            ]);
        }
    

      




        // Mail::to($request->email)->send(new InvitationEmails($request->firstName));




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
