<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;


class UserEmailController extends Controller
{

    protected $UserRegistration;


  


    public function time()
    {

        $now = Carbon::now();

        $nextSaturday = $now->copy()->next(Carbon::SUNDAY);

        if ($now->gt($nextSaturday->subHours(12)))
        {

            $nextSaturday = $now->copy()->next(Carbon::SUNDAY)->addWeek();

        }

        return $nextSaturday;

    }

    public function PreMemberEmail(Request $request){


        $data = [

            'title' => 'MNSMPC',
            'name' => $request->input('firstName'),
            'email'=> $request->input('email'),
        ];

        $date = $this->time()->format('F j Y');


        $content= [

            'body'=>'PRE-MEMBER REGISTRATION',
            'title'=>'Pre-Membership Registration',
            'name'=>$data['name'],
            'date' => $date,

        ];



        // sending mail, view, content, use variable to be use in content.

        Mail::send('Mail.membership', $content, function($message) use ($data, $content,) {
            $message->to($data['email'])
                ->subject($content['title']);


                $filePath = public_path('upload/MNSMPC-PRIMER.pdf');

                $message->attach($filePath, [
                    'as' => 'MNSMPC-PRIMER.pdf', // specify the name of the file
                    'mime' => 'application/pdf' // specify the MIME type of the file
                ]);

        });

    }

}
