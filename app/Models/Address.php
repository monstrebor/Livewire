<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    
    protected $fillable = [


        'Barangay',
        'Municipality',
        'Province',
        'Region',
        'Street',
        'Reg_ID',

    ];


    protected $guarded = [];









}
