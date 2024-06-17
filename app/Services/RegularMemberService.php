<?php

namespace App\Services;

use App\Models\{Address,Dependency,idValidation,RegularMember,Spouse,Marriage,Employer};
use App\Mail\InvitationEmails;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;




class RegularMemberService{


    public function RegularMemberStore(Request $request){


        $data = $request->all();

        $regular = RegularMember::create($data);

        $regular_id = $regular->id;

        // method for creating in Address
        $this->Address($request, $regular_id);

        // method for creating in Dependency
        $this->Dependency($request, $regular_id);

        // method for creating in IdValidation
        $this->IdValidation($request, $regular_id);

        //method for creating in Spouse and Marriage
        $this->Spouse($request, $regular_id);

        //method for creating Employer
        $this->Employer($request,$regular_id);

        // email
        Mail::to($request->email)->send(new InvitationEmails($request->firstName));


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

    private function Spouse(Request $request, $regular_id)
    {

        $spouse = Spouse::create([

            'spouseName' => $request->spouseName,
            'placeOfBirth'=> $request->placeOfbirth,
            'dateOfBirth'=> $request->dateOfBirth,
            'EducationalAttainment' => $request->educationalAttaiment,
            'occupationSpouse'=> $request->occupationSpouse,

        ]);

        $spouse_id = $spouse->id;

        $this->Marriage($request, $regular_id, $spouse_id);

    }


    private function Marriage(Request $request, $regular_id, $spouse_id){

        Marriage::create([

        'placeOfMarriage' => $request->placeOfMarriage,
        'dateOfMarriage' => $request->dateOfMarriage,
        'SpouseID'=> $spouse_id,
        'Reg_ID'=> $regular_id,

        ]);

        }

    private function Employer(Request $request, $regular_id)
    {

        Employer::create([

        'EmployerName' => $request->EmployerName,
        'EmployerAddress' => $request->EmployerAddress,
        'Reg_ID'=> $regular_id,


        ]);


    }




}



