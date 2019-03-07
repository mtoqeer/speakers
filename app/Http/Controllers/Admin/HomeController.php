<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }
    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.dashboard.home');
    }
    
    

    

    public function showprofilepage(){
        return view('admin.dashboard.profile');
    }

    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    

    // Get Speaker Data On Admin HomePage

    public function adminIndex(){
        
        $getApprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'approved')->get();

        $getUnapprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'unapproved')->get();



        return view('admin.dashboard.home', compact('getApprovedSpeakers','getUnapprovedSpeakers'));
    }

    // Get Data On Active Speakers Page

    public function showactivespeakers(){

        $getApprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'approved')->get();
        return view('admin.dashboard.active' , compact('getApprovedSpeakers'));
    }


    // Get Data On Inactive Speakers Page

    public function showinactivespeakers(){

        $getUnapprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'unapproved')->get();
        return view('admin.dashboard.inactive', compact('getUnapprovedSpeakers'));
    }

    // Status Change To Approve
    public function changeToApprovespeakers(Request $request){

        DB::table('users')->where('id', $request->id)->update(['status' => 'approved']);
        
        $getUnapprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'unapproved')->get();

        return view('admin.dashboard.inactive', compact('getUnapprovedSpeakers'));
        
    }

    // Status Changed To Approved
    
    public function changeToUnapprovespeakers(Request $request){

        DB::table('users')->where('id', $request->id)->update(['status' => 'unapproved']);
        
        $getApprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'approved')->get();

        return view('admin.dashboard.active', compact('getApprovedSpeakers'));
       

        
    }
    


}