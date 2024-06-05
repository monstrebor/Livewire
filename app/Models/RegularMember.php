<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularMember extends Model
{
    use HasFactory;
    protected $table = 'regular_members';
// In RegularMember model
protected $fillable = [
    'firstName', 'middleName', 'lastName', 'gender', 'age', 'address', 
    'religion', 'POB', 'DOB', 'idType', 'idNumber', 'occupation', 
    'employment_status', 'educational_attainment', 'contactNumber', 
    'facebook_account', 'email', 'nameOfEmployer', 'addressOfEmployer', 
    'monthlyIncome', 'annualIncome', 'house_ownership', 'citizenship', 
    'civilStatus', 'place_of_marriage', 'date_of_marriage', 'spouse_name', 
    'place_of_birth', 'educational_attainmentSpouse', 'occupationSpouse'
];

}
