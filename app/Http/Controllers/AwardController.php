<?php

namespace App\Http\Controllers;
use App\User;
use App\Award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userAwardIndex()
    {
        $userid = auth()->user()->id;
        $getAward = DB::table('users')
            ->join('awards', 'users.id', '=', 'awards.user_id')
            ->select('awards.*')
            ->where('awards.user_id' , $userid)->get();
        return view('user.awards')->with('getAward', $getAward);
    }

    public function userAwardSave(Request $request)
    {
        $award = new Award();
        $award->name = $request->award_name;
        $award->year = $request->award_year;
        $award->user_id = $request->user_id;
        $awardSave = $award->save();

        if($awardSave){
            return redirect('/dashboard/awards')->with('message','Record Have Been Added');
        }
    }

    public function userAwardDelete($id){
        $award = Award::find($id);
        $awardDeleted = $award->delete();
        if($awardDeleted){
            return redirect('/dashboard/awards')->with('deleted','Deleted Successfully!!');
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
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit(Award $award)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Award $award)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy(Award $award)
    {
        //
    }
}
