<?php

namespace App\Http\Controllers;
use App\User;
use App\Past_talk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PastTalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function userPastTaskIndex()
    {

        $userid = auth()->user()->id;
        $getPastTask = DB::table('users')
            ->join('past_talks', 'users.id', '=', 'past_talks.user_id')
            ->select('past_talks.*')
            ->where('past_talks.user_id' , $userid)->get();
        return view('user.past-talks')->with('getPastTask', $getPastTask);
    }

    public function userPastTaskSave(Request $request)
    {
        $pastTask = new Past_talk();
        $pastTask->title = $request->talk_title;
        $pastTask->location = $request->talk_location;
        $pastTask->date = $request->talk_date;
        $pastTask->user_id = $request->user_id;
        $pastTaskSave = $pastTask->save();

        if($pastTaskSave){
            return redirect('/dashboard/past-talks')->with('message','Record Have Been Added');
        }
    }

    public function userPastTaskDelete($id){

        $pastTask = Past_talk::find($id);
        $pastTaskDeleted = $pastTask->delete();
        if($pastTaskDeleted){
            return redirect('/dashboard/past-talks')->with('deleted','Deleted Successfully!!');
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
     * @param  \App\Past_talk  $past_talk
     * @return \Illuminate\Http\Response
     */
    public function show(Past_talk $past_talk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Past_talk  $past_talk
     * @return \Illuminate\Http\Response
     */
    public function edit(Past_talk $past_talk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Past_talk  $past_talk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Past_talk $past_talk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Past_talk  $past_talk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Past_talk $past_talk)
    {
        //
    }
}
