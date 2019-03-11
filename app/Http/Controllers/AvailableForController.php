<?php

namespace App\Http\Controllers;

use App\Available_for;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvailableForController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userAvailableForIndex()
    {
        $userid = auth()->user()->id;
        $getAvailabelFor = DB::table('users')
            ->join('available_fors', 'users.id', '=', 'available_fors.user_id')
            ->select('available_fors.*')
            ->where('available_fors.user_id' , $userid)->get();
        return view('user.available-for')->with('getAvailabelFor', $getAvailabelFor);
    }

    public function userAvailableForSave(Request $request)
    {
        $availableFor = new Available_for();
        $availableFor->conference = $request->conference;
        $availableFor->workshop = $request->workshop;
        $availableFor->moderator = $request->moderator;
        $availableFor->online = $request->online;
        $availableFor->school = $request->school;
        $availableFor->meetup = $request->meetup;
        $availableFor->user_id = $request->user_id;
        $availableForSave = $availableFor->save();

        if($availableFor){
            return redirect('/dashboard/available-for')->with('message','Record Have Been Added');
        }
    }

    public function userAvailableForUpdate(Request $request){
        $availableFor = Available_for::find($request->id);

        $availableFor->conference = $request->conference;
        $availableFor->workshop = $request->workshop;
        $availableFor->moderator = $request->moderator;
        $availableFor->online = $request->online;
        $availableFor->school = $request->school;
        $availableFor->meetup = $request->meetup;
        $availableForSave = $availableFor->save();

        if($availableForSave){
            return redirect('/dashboard/available-for')->with('message','Record Have Been Updated');
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
     * @param  \App\Available_for  $available_for
     * @return \Illuminate\Http\Response
     */
    public function show(Available_for $available_for)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Available_for  $available_for
     * @return \Illuminate\Http\Response
     */
    public function edit(Available_for $available_for)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Available_for  $available_for
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Available_for $available_for)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Available_for  $available_for
     * @return \Illuminate\Http\Response
     */
    public function destroy(Available_for $available_for)
    {
        //
    }
}
