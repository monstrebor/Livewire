<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdValidation extends Model
{
    use HasFactory;


    protected $table= 'id_validations';


    protected $fillable = [

        'Identification',
        'Identification_Number',
        'Identification_image',
        'Reg_ID',

    ];


    protected $guarded = [  ];



}
