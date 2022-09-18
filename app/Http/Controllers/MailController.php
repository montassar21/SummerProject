<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(Request $req){
    $req->validate([
        'nom'=>'required',
        'text'=>'required',
        'email'=>'required'
    ]);
    if($this->isOnline()){
        $email_data=[
            'recipient'=>'brahemmonta@gmail.com',
            'fromEmail'=>$req->email,
            'fromName'=>$req->nom,
            'body'=>$req->text,
        ];
        \Mail::send('email-template',$email_data,function($message) use ($email_data){
            $message->to($email_data['recipient'])
        ->from($email_data['fromEmail'],$email_data['fromName'])
        ->subject("MOM");        });
        return redirect()->back()->with('Success','Email sent');
    }
    else return redirect()->back()->with('Error','Check your internet connection');
    }
    public function isOnline($site="https://youtube.com"){
      if(@fopen($site,"r")){
        return true;
      }
      else return false;
    }
}

