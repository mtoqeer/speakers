<?php

namespace App\Http\Controllers;
use App\User;
use App\Expertise;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userExpertiseIndex()
    {

        $userid = auth()->user()->id;
        $getexpertise = DB::table('users')
            ->join('expertises', 'users.id', '=', 'expertises.user_id')
            ->select('expertises.expertise_topic','expertises.user_id','expertises.id')
            ->where('expertises.user_id' , $userid)->get();
        return view('user.expertise')->with('getexpertise', $getexpertise);
    }

    public function userExpertiseSave(Request $request)
    {
        $expertise = new Expertise();
        $expertise->expertise_topic = $request->expertise;
        $expertise->user_id = $request->id;
        $expertisesave = $expertise->save();

        if($expertisesave){
            return redirect('/dashboard/expertise')->with('message','Expertise Have Been Added');
        }

    }

    public function userExpertiseDelete($id){

        $expertise = Expertise::find($id);
        $expertisedeleted = $expertise->delete();

        if($expertisedeleted){
            return redirect('/dashboard/expertise')->with('deleted','Deleted Successfully!!');
        }
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
     * @param  \App\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function show(Expertise $expertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function edit(Expertise $expertise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expertise $expertise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expertise $expertise)
    {
        //
    }
}
