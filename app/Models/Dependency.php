<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependency extends Model
{
    use HasFactory;



    protected $fillable = [

        'Dependent_name',
        'Dependent_dob',
            'Reg_ID'


    ];





}
