<?php

namespace App\Http\Controllers;

use Session;
use App\PaymentEmail;
use Illuminate\Http\Request;
use App\Mail\PaymentDetailsMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class PaymentEmailController extends Controller
{
 
    public function PaymentEmailSend(Request $request){
        
    $userid = $request->id;
    $mailsend = DB::table('users')->where('users.id' , $userid)->first();

    $email = $mailsend->email;


    $data = array(
        'name' => $request->name
    );
       
        $paymentemail = new PaymentEmail();
        $paymentemail->user_id = $userid;
        $paymentemail->email_status = 'Send';
        $paymentEmailDetailsSave = $paymentemail->save();

        Mail::to($email)->send(new PaymentDetailsMail($data));
       
        
        Session::flash('EmailSend', "Email has been SENT successfully!");
        return Redirect::back();
        
    }

    public function PaymentEmailSendAgain(Request $request){
        $userid = $request->id;
        $mailsend = DB::table('users')->where('users.id' , $userid)->first();

        $email = $mailsend->email;


        $data = array(
            'name' => $request->name
        );

        Mail::to($email)->send(new PaymentDetailsMail($data));
       
        Session::flash('EmailSend', "Email has been SENT successfully!");
        return Redirect::back();
    }


}
