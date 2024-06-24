<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class StoreRegularForm extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

        'firstName' => 'required|max:50',
        'middleName'  => 'required|max:50',
        'lastName'  => 'required|max:50',
        'religion'  => 'required|max:50',
        'POB'  => 'required|max:50',
        'DOB'  => 'required|date|before:' . Carbon::now()->subYears(18)->format('Y-m-d'),
        'contactNumber' => 'required|max_digits:20',
        'facebookAccount'  => 'required|max:50',
        'email'  => 'required|email|unique:regular_members|max:50',
        'gender'  => 'required',
        'occupation'  => 'required',
        'employmentStatus'  => 'required',
        'educationalAttainment'  => 'required',
        'houseOwnership'  => 'required',
        'citizenship'  => 'required|max:20',
        'civilStatus'  => 'required',
        'monthlyIncome'  => 'required',
        'annualIncome'  => 'required',
        'lengthOfStay' => 'required',
        'numberOfChildren' => 'required',
        'baranggay' => 'required',
        'idType1'  => 'required',
        'idNumber1'  => 'required|different:idNumber2',
        'image1'  => 'required|image|mimes:jpeg,png,jpg|max:4048',
        'idType2'  => 'required',
        'idNumber2'  => 'required|different:idNumber1',
        'image2'  => 'required|image|mimes:jpeg,png,jpg|max:4048',
        'nameOfEmployer'  => 'required',
        'addressOfEmployer'  => 'required',
        
        ];
    }


    public function messages(): array
    {
        return [
            'firstName.required' => 'The first name is required.',
            'firstName.max' => 'The first name may not be greater than 50 characters.',
            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be a valid email format.',
            'email.unique' => 'The email address has already been taken.',
            'DOB.before' => 'You must be at least 18 years old.',
            'image2.max'  => 'The image size must aleast 4mb',
            'image2.mimes'  => 'The file must be jpeg, jpg, and png type',
            'image2'  => 'The image is required',
            'idNumber1.different' => 'The ID Number (1) is already provided.',
            'idNumber2.different' => 'The ID Number (2) is already provided.',
            'idNumber1.required' => 'The ID Number is required.',
            'idNumber2.required' => 'The ID Number is required.',
            'idType2.required' => 'The ID Type is required.',
            'idType1.required' => 'The ID Type is required.',
        ];
    }


    public function prepareForValidation(){


        $this->merge([

            'firstName' => Str::title($this->firstName),
            'lastName' => Str::title($this->lastName),
            'middleName' => Str::title($this->middleName),
            'citizenship' => Str::title($this->citizenship),
            'nameOfEmployer' => Str::title($this->nameOfEmployer),

        ]);





    }

}
