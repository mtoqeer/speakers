<?php

namespace App\Http\Controllers;
use App\User;
use App\Degree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userDegreeIndex()
    {

        $userid = auth()->user()->id;
        $getDegree = DB::table('users')
            ->join('degrees', 'users.id', '=', 'degrees.user_id')
            ->select('degrees.*')
            ->where('degrees.user_id' , $userid)->get();
        return view('user.degrees')->with('getDegree', $getDegree);
    }

    public function userDegreeSave(Request $request)
    {
        $degree = new Degree();
        $degree->title = $request->degree_title;
        $degree->university = $request->degree_university;
        $degree->year = $request->degree_year;
        $degree->user_id = $request->user_id;
        $degreeSave = $degree->save();

        if($degreeSave){
            return redirect('/dashboard/degrees')->with('message','Degree Have Been Added');
        }
    }

    public function userDegreeDelete($id){

        $degree = Degree::find($id);
        $degreeDeleted = $degree->delete();
        if($degreeDeleted){
            return redirect('/dashboard/degrees')->with('deleted','Deleted Successfully!!');
        }
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function show(Degree $degree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function edit(Degree $degree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degree $degree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degree $degree)
    {
        //
    }
}
