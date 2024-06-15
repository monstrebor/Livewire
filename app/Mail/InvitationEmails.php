<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class InvitationEmails extends Mailable
{
    use Queueable, SerializesModels;

    public $name;


    /**
     * Create a new message instance.
     */
    public function __construct($name)
    {
        $this->name=$name;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject:'MNSMPC',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'Mail.membership',
            with: [

                'name' => $this->name,
                'date' => $this->time(),

            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [

            // Attachment::fromPath(public_path('/upload/MNSMPC-PRIMER.pdf'))
            // ->as('MNSMPC-PRIMER.pdf')
            // ->withMime('application/pdf'),   // optional

        ];
    }



    private function time()
    {

        $now = Carbon::now();

        $thisSaturday = $now->isSaturday();


        if ($thisSaturday)    // if it is saturday today.
        {
            $Saturday = $now->copy()->next(Carbon::SATURDAY);  // next Saturday
        }else{

            $Saturday = $now->copy()->next(Carbon::SATURDAY);   // saturday
        }

        return $Saturday->format('F j Y');

    }


}
