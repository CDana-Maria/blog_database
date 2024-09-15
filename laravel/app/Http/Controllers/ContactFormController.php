<?php

namespace App\Http\Controllers;

use App\Services\ContactUsMailer;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Mail\Mailer;




class ContactFormController  extends Controller
{

    private ContactUsMailer $mailer;

    public function __construct(ContactUsMailer $mailer)
    {
        $this->mailer = $mailer;
    }
    public function __invoke(Request $request) {
        $this->mailer->send($request->all());
        
        return redirect('/contact');
    }

    
}
