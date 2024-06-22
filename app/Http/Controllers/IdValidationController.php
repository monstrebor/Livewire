<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\idValidation;


class IdValidationController extends Controller
{



    public function index(){


       $id = IdValidation::all();

      return view('Home.picture2',compact('id'));


    }






}
