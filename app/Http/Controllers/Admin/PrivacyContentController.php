<?php

namespace App\Http\Controllers\Admin;

use App\PrivacyContent;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivacyContentController extends Controller
{

    public function __construct()
    {
       
    }

    public function showpage()
    {

        $privacycontent = DB::table('privacy_contents')->select('privacy_policy','id')->first();
        return view('admin.dashboard.privacycontent', compact('privacycontent'));

    }


    public function savecontent(Request $request){
        
        DB::table('privacy_contents')->where('id', $request->id)->update(['privacy_policy' => $request->privacy_policy]);
        
        $privacycontent = DB::table('privacy_contents')->select('privacy_policy','id')->first();
        // $privacy = new PrivacyContent();
        // $privacy->privacy_policy = $request->privacy_policy;
        // $privacySave = $privacy->save();

            return redirect('/admin/privacyedit')->with('message','Privacy Policy Has Been Update');
    }

    public function showebsitepage(){

        $privacycontent = DB::table('privacy_contents')->select('privacy_policy','id')->first();
        return view('privacy', compact('privacycontent'));

    }
   
}
