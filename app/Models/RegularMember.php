<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularMember extends Model
{
    use HasFactory;



    protected $fillable = [

        'firstName',
        'middleName',
        'lastName',
        'religion',
        'POB',
        'DOB',
        'contactNumber',


    ];



    protected $guarded = [


    ];




}
