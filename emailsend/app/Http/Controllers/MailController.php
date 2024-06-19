<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show (){
        return view('emails.form');
    }
    public function index()
    {
        $mailData = [
            'title' => 'Mail test',
            'body' => 'test tes.'
        ];
         
        Mail::to('lmainoumaima@gmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
    public function create (Request $request) {
        $request->validate([
            'email' => 'required|email',
            'subject'=>'required',
            'content' => 'required'
        ]);

        $email = $request ->input('email');
        $subject = $request ->input('subject');
        $content = $request ->input('content');
        $emailData = [
            'title' => $subject ,
            'body' => $content
        ];
        Mail::to($email)->send(new DemoMail($emailData));
        dd("Email is sent successfully.");


    }
}