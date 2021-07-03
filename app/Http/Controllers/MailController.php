<?php

namespace App\Http\Controllers;

use App\Mail\Formulairecontact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    
    public function sendMail(Request $request){
            $contenuEmail =[
                "name" => $request->name,
                "email"=> $request->email,
                "subject"=>$request->subject,
                "message"=> $request->message
            ];
            Mail::to("yasminatest@gmail.com")->send(new Formulairecontact($contenuEmail));
            // return "message envoyé";
            return redirect("/#contact")->with("message_mail","message envoyé");
    }
  
}
