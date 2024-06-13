<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use App\Mail\InvitationEmails;

use App\Models\RegularMember;
use App\Models\Dependency;
use App\Models\IdValidation;
use App\Models\Address;


class RegularMemberController extends Controller
{


    public function store(Request $request)
    {

        $data = $request->all();

        $regular = RegularMember::create($data);
        $regular_id = $regular->id;

        // method for creating in Address
        $this->Address($request, $regular_id);

        // method for creating in Dependency
        $this->Dependency($request, $regular_id);

        // method for creating in IdValidation
        $this->IdValidation($request, $regular_id);

        Mail::to($request->email)->send(new InvitationEmails($request->firstName));
        

        return redirect()->route('id.index');

        



    }


    private function Dependency(Request $request , $regular_id){

        foreach ($request->Dependent_name as $index => $name) {

            Dependency::create([

                'Dependent_name' => $name,
                'Dependent_dob' => $request->Dependent_dob[$index],
                'Reg_ID' => $regular_id,
            ]);
        }

    }



    private function IdValidation(Request $request, $regular_id){





        foreach($request->idType as  $index => $id_name){

            $imageName = time().'.'.$request->image[$index]->extension();

             iDValidation::create([

                'Identification' =>  $id_name,
                'Identification_Number' => $request->idNumber[$index],
                'Identification_image'=> $imageName,
                'Reg_ID' => $regular_id,

             ]);

             $request->image[$index]->move(storage_path('app/public/images/'), $imageName);


        }



    }

    private function Address(Request $request, $regular_id){


        Address::create([

        'Barangay' => $request->Barangay,
        'Municipality'=> $request->Municipality,
        'Province'=> $request->Province,
        'Region' => $request->Region,
        'Street' => $request->Street,
        'Reg_ID' => $regular_id,

        ]);



    }


   





}
