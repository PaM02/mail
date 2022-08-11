<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send_mail(){

        $contenuSms = 'Cher abonné pour rappel votre forfait du moi à 23h59.';

        $body = [

            'body1' => 'Bonjour,',
            'body2' => $contenuSms

        ];

        Mail::to("matar0236@gmail.com")
        ->send(new TestMail("Objet_mail",$body));
    }
}
