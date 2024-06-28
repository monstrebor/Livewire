<?php

namespace App\Services;

use App\Models\{Address,Dependency,idValidation,RegularMember,Spouse,Marriage,Employer};
use App\Mail\InvitationEmails;





use Illuminate\Support\Facades\Mail;

use App\Http\Requests\StoreRegularForm;


class RegularMemberService{


    public function RegularMemberStore(StoreRegularForm $request){


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


    private function Dependency( StoreRegularForm $request , $regular_id){

        foreach ($request->Dependent_name as $index => $name) {

            Dependency::create([

                'Dependent_name' => $name,
                'Dependent_dob' => $request->Dependent_dob[$index],
                'Reg_ID' => $regular_id,
            ]);
        }

    }


    private function IdValidation( StoreRegularForm $request, $regular_id){


        $imageName = time().'a.'.$request->image1->extension();
        $imageName2 = time().'b.'.$request->image2->extension();

        // Move uploaded images to storage
        $request->image1->move(storage_path('app/public/images/'), $imageName);
        $request->image2->move(storage_path('app/public/images/'), $imageName2);

        // Create database record with file names
        iDValidation::create([
            'Id_Type_1' => $request->idType1,
            'Id_Type_2' => $request->idType2,
            'Id_Num_1' => $request->idNumber1,
            'Id_Num_2' => $request->idNumber2,
            'Id_image_1' => $imageName,
            'Id_image_2' => $imageName2,
            'Reg_ID' => $regular_id,
        ]);

    }

    private function Address( StoreRegularForm $request, $regular_id){


        Address::create([

        'Barangay' => $request->baranggay,
        'Municipality'=> $request->municipality,
        'Province'=> $request->province,
        'Region' => $request->region,
        'Street' => $request->street,
        'Reg_ID' => $regular_id,

        ]);

    }

    private function Spouse( StoreRegularForm $request, $regular_id)
    {

        $spouse = Spouse::create([

            'spouseName' => $request->spouseName,
            'placeOfBirth'=> $request->spousePOB,
            'dateOfBirth'=> $request->spouseDOB,
            'EducationalAttainment' => $request->spouseEducationalAttaiment,
            'occupationSpouse'=> $request->spouseOccupation,

        ]);

        $spouse_id = $spouse->id;

        $this->Marriage($request, $regular_id, $spouse_id);

    }


    private function Marriage( StoreRegularForm $request, $regular_id, $spouse_id){

        Marriage::create([

        'placeOfMarriage' => $request->placeOfMarriage,
        'dateOfMarriage' => $request->marriageDate,
        'SpouseID'=> $spouse_id,
        'Reg_ID'=> $regular_id,

        ]);

        }

    private function Employer( StoreRegularForm $request, $regular_id)
    {

        Employer::create([

        'EmployerName' => $request->nameOfEmployer,
        'EmployerAddress' => $request->addressOfEmployer,
        'Reg_ID'=> $regular_id,


        ]);


    }





}



