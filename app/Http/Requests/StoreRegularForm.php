<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegularForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

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
        'DOB'  => 'required|max:50',
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
        'idNumber1'  => 'required',
        'image1'  => 'required|image|mimes:jpeg,png,jpg|max:4048',
        'idType2'  => 'required',
        'idNumber2'  => 'required',
        'image2'  => 'required|image|mimes:jpeg,png,jpg|max:4048',
        'nameOfEmployer'  => 'required',
        'addressOfEmployer'  => 'required',

        ];
    }
}
