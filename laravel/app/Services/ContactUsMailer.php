<?php
namespace App\Services;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Message;
use Psr\Log\LoggerInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactFormController;


class ContactUsMailer
{
    private const DESTINATION_EMAIL = 'dana@maria.dm';

    private Mailer $mailer;

    private LoggerInterface $logger;

    /**
     * 
     * ContactUsMail constructor
     * 
     * @param Mailer $mailer
     * @param LoggerInterface $logger
     */

     public function __construct(Mailer $mailer, LoggerInterface $logger)
     {
         $this->mailer = $mailer;
         $this->logger = $logger;
     }

    public function send(array $input): void{
        
        ['name'=>$name, 'email'=>$email, 'subject'=>$subject, 'content' => $content]=$input;
        $this->mailer->send(
        'emails.test', [
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
            'content'=>$content 
            ],

         function(Message $message) use ($subject){
            $message->to(self::DESTINATION_EMAIL);
            $message->subject($subject);
        }); 
       
        $this->logger->info('Contact Us Mail send' . self::DESTINATION_EMAIL);
    

    }
}