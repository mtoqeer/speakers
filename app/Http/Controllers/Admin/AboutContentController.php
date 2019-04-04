<?php

namespace App\Http\Controllers\Admin;

use App\AboutContent;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutContentController extends Controller
{
    public function showpage()
    {

        $termscontent = DB::table('about_contents')->select('about_us','id')->first();
        return view('admin.dashboard.aboutcontent', compact('termscontent'));

    }


    public function savecontent(Request $request){
        
        DB::table('about_contents')->where('id', $request->id)->update(['about_us' => $request->termscond]);
        
        $termscontent = DB::table('about_contents')->select('about_us','id')->first();


            return redirect('/admin/termsedit')->with('message','Terms and Conditions Has Been Update');
    }

    public function showebsitepage(){

        $termscontent = DB::table('about_contents')->select('about_us','id')->first();
        return view('terms', compact('termscontent'));

    }
}
