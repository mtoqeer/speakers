<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentInfoEmailContent;
use Illuminate\Support\Facades\DB;

class PaymentInfoEmailContentController extends Controller
{

    public function showpage()
    {

        $emailcontent = DB::table('payment_info_email_contents')->select('email_content','id')->first();
        return view('admin.dashboard.emailcontent', compact('emailcontent'));

    }


    public function savecontent(Request $request){
        
        DB::table('payment_info_email_contents')->where('id', $request->id)->update(['email_content' => $request->email_content]);
        
        $emailcontent = DB::table('payment_info_email_contents')->select('email_content','id')->first();

            return redirect('/admin/emailedit')->with('message','Email Content Has Been Updated');
    }

    // public function showebsitepage(){

    //     $emailcontent = DB::table('payment_info_email_contents')->select('email_content','id')->first();
    //     return view('privacy', compact('privacycontent'));

    // }



}
