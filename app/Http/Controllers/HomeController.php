<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.dashboard');
    }

    // User Basic Details Update
    public function update(Request $request){
        $basic = User::find($request->id);
        $basic->name = $request->name;
        $basic->email = $request->email;
        $updated = $basic->save();
        if($updated){
            return redirect('/dashboard')->with('message','Updated Successfully');
        }
    }

}
