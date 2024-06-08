<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;

class UserEmailController extends Controller
{
    public function time()
    {

        $now = Carbon::now();
        $thisSaturday = $now->isSaturday();


        if ($thisSaturday)    // if it is saturday today.
        {
            $Saturday = $now->copy()->next(Carbon::SATURDAY);  // next Saturday
        }else{
             $Saturday = Carbon::now()->startOfWeek()->addDays(5);  // saturday
        }

        return $Saturday;


    }

    public function PreMemberEmail(Request $request){

        $data = [

            'title' => 'MNSMPC',
            'name' => $request->input('firstName'),
            'email'=> $request->input('email'),
        ];

        $date = $this->time()->format('F j Y');

        $data = [


            'title' => 'MNSMPC',
            'name' => $request->input('firstName'),
            'email'=> $request->input('email'),

        ];

        $content= [

            'body'=>'PRE-MEMBER REGISTRATION',
            'title'=>'Pre-Membership Registration',
            'name'=>$data['name'],
            'date' => $date,

        ];

        Mail::send('Mail.membership', $content, function($message) use ($data, $content,) {
            $message->to($data['email'])
                ->subject($content['title']);

                $filePath = public_path('/upload/MNSMPC-PRIMER.pdf');

                $message->attach($filePath, [
                    'as' => 'MNSMPC-PRIMER.pdf', // specify the name of the file
                    'mime' => 'application/pdf' // specify the MIME type of the file
                ]);

        });



    }

}
