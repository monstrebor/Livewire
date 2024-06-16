<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    use HasFactory;


    protected $table = "spouse";



    protected $fillable = [

       'spouseName',
       'placeOfBirth',
       'dateOfBirth',
       'EducationalAttainment',
       'Occupation',
       
    ];



}
