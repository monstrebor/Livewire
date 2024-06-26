<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{

        public $path = 'upload/';



    public function primerDownload(){

        $filename = 'MNSMPC-PRIMER.pdf';

        $filetype = [

            'Content-Type'=> 'application/pdf',
        ];
        $filePath = public_path($this->path.$filename);

        if(file_exists($filePath)){

        return Response()->download($filePath, $filename,$filetype);

        }else{

            return abort(404,'file not found');

        }
    }


    public function regularFormDownload(){

        $filename = 'RegularForm.pdf';

        $filetype = [

            'Content-Type'=> 'application/pdf',
        ];
        $filePath = public_path($this->path.$filename);

        if(file_exists($filePath)){

        return Response()->download($filePath, $filename,$filetype);

        }else{

            return abort(404,'file not found');

        }
    }



}
