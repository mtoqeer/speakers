<?php

namespace App\Http\Controllers;
use App\Mail\ContactForm;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AllFormsSubmissionController extends Controller
{
    //

    public function sendContactFormsDetails(Request $request){

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $data = array(
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        );

        

        
        Mail::to('toqeer.94@gmail.com')->send(new ContactForm($data));
        
        return view('contact');
     
        
    }

    public function speakersContactForm(Request $request){

        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_subject' => 'required',
            'customer_message' => 'required',
        ]);

        $data = array(
            'name' => $request->customer_name,
            'email' => $request->customer_email,
            'subject' => $request->customer_subject,
            'message' => $request->customer_message,
        );

        Mail::to('toqeer.94@gmail.com')->send(new \App\Mail\speakersContactForm($data));
        
        return Response::json(['response' => 'Success']);     
    }
}
