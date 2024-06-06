<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Mail;


class UserEmailController extends Controller
{


    public function PreMemberEmail(Request $request){


        $data = [
            'title' => 'MNSMPC',
            'name' => $request->input('firstname'),
            'middlename' => $request->input('middlename'),
            'lastname' => $request->input('lastname'),
            'email'=>$request->input('email'),
            'address' => $request->input('address'),
            'contactnumber'=>$request->input('contactnumber'),
            'dob'=>$request->input('dob'),
            'gender'=> $request->input('gender'),
            'occupation'=> $request->input('occupation'),
            'civilstatus' => $request->input('civilstatus'),
        ];

        // $pdf = PDF::loadView('PDF.try', $data);

        // return $pdf->download('document.pdf');

        // $pdfContent = $pdf->output();

        $content= [
            'body'=>'PRE-MEMBER REGISTRATION',
            'content'=> "Good Day! " . $data['name'] . ". You are now a member of MNSMPC. Please don't reply on this mail.",
            'title'=>'Pre-Membership Registration'
        ];


        // Mail::to($data['email'])->send(new SampleEmail($content,$subject)); // key of sending info.
        // return "Email sent successfully!";

        Mail::send('Mail.membership', $content, function($message) use ($data, $content,) {
            $message->to($data['email'])
                ->subject($content['title']);
                // ->attachData($pdfContent, 'PRE-MEMBERSHIP.pdf',
                // ['mime' => 'application/pdf']);

                $filePath = public_path('/upload/MNSMPC-PRIMER.pdf');

                $message->attach($filePath, [
                    'as' => 'MNSMPC-PRIMER.pdf', // specify the name of the file
                    'mime' => 'application/pdf' // specify the MIME type of the file
                ]);

        });

        // return redirect()->route('Login.index');

    }

}
