<?php

namespace App\Http\Controllers;
use App\User;
use App\Current_position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrentPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userCurrentPositionIndex()
    {
        $userid = auth()->user()->id;
        $getCurrentPoisition = DB::table('users')
            ->join('current_positions', 'users.id', '=', 'current_positions.user_id')
            ->select('current_positions.*')
            ->where('current_positions.user_id' , $userid)->get();
        return view('user.current-positions')->with('getCurrentPoisition', $getCurrentPoisition);
    }

    public function userCurrentPositionSave(Request $request)
    {
        $currentPosition = new Current_position();
        $currentPosition->title = $request->position_title;
        $currentPosition->department = $request->position_department;
        $currentPosition->user_id = $request->user_id;
        $currentPositionSave = $currentPosition->save();

        if($currentPositionSave){
            return redirect('/dashboard/current-positions')->with('message','Record Have Been Added');
        }
    }

    public function userCurrentPositionDelete($id){
        $currentPosition = Current_position::find($id);
        $currentPositionDeleted = $currentPosition->delete();
        if($currentPositionDeleted){
            return redirect('/dashboard/current-positions')->with('deleted','Deleted Successfully!!');
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
     * @param  \App\Current_position  $current_position
     * @return \Illuminate\Http\Response
     */
    public function show(Current_position $current_position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Current_position  $current_position
     * @return \Illuminate\Http\Response
     */
    public function edit(Current_position $current_position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Current_position  $current_position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Current_position $current_position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Current_position  $current_position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Current_position $current_position)
    {
        //
    }
}
