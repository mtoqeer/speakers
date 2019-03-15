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
        
        return Response::json(['message'=>'Mail Has Been Send Successfully!!']);
     
        
    }
}
