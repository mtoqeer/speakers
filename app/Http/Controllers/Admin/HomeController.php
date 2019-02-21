<?php

namespace App\Http\Controllers\Admin;

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
    
    public function showactivespeakers(){
        return view('admin.dashboard.active');
    }

    public function showinactivespeakers(){
        return view('admin.dashboard.inactive');
    }

    public function showprofilepage(){
        return view('admin.dashboard.profile');
    }

}