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


    $emailcontent = DB::table('payment_info_email_contents')->select('email_content','id')->first();
        
        $emailcontenthtml = $emailcontent->email_content;

        $data = array(
            'name' => $request->name,
            'email_content' => $emailcontenthtml
        );
       
        $paymentemail = new PaymentEmail();
        $paymentemail->user_id = $userid;
        $paymentemail->email_status = 'Send';
        $paymentEmailDetailsSave = $paymentemail->save();

        Mail::to($email)->send(new PaymentDetailsMail($data));
        
        Session::flash('EmailSend', "Email has been sent successfully!");
        return Redirect::back();
        
    }

    public function PaymentEmailSendAgain(Request $request){
        $userid = $request->id;
        $mailsend = DB::table('users')->where('users.id' , $userid)->first();

        $email = $mailsend->email;

        $emailcontent = DB::table('payment_info_email_contents')->select('email_content','id')->first();
        
        $emailcontenthtml = $emailcontent->email_content;

        $data = array(
            'name' => $request->name,
            'email_content' => $emailcontenthtml
        );

        Mail::to($email)->send(new PaymentDetailsMail($data));
       
        Session::flash('EmailSend', "Email has been sent successfully!");
        return Redirect::back();
    }


}
