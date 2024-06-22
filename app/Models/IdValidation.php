<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdValidation extends Model
{
    use HasFactory;


    protected $table= 'id_validations';


    protected $fillable = [

        'Id_Type_1',
        'Id_Type_2',
        'Id_Num_1',
        'Id_Num_2',
        'Id_image_1',
        'Id_image_2',
        'Reg_ID',

    ];


    protected $guarded = [  ];



}
