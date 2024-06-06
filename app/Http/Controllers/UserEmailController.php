<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;

class UserEmailController extends Controller
{
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

        $data = [


            'title' => 'MNSMPC',
            'name' => $request->input('firstName'),
            'email'=> $request->input('email'),

        ];

        // $pdf = PDF::loadView('PDF.try', $data);

        // return $pdf->download('document.pdf');

        // $pdfContent = $pdf->output();

        $content= [

            'body'=>'PRE-MEMBER REGISTRATION',
            'title'=>'Pre-Membership Registration',
            'name'=>$data['name'],
            'date' => $date,

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
