<?php

namespace App\Http\Controllers;
use App\User;
use App\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userWorkshopIndex()
    {
        $userid = auth()->user()->id;
        $getWorkshop = DB::table('users')
            ->join('workshops', 'users.id', '=', 'workshops.user_id')
            ->select('workshops.*')
            ->where('workshops.user_id' , $userid)->get();
        return view('user.workshops')->with('getWorkshop', $getWorkshop);
    }

    public function userWorkshopSave(Request $request)
    {
        $workshop = new Workshop();
        $workshop->title = $request->workshop_title;
        $workshop->hours = $request->workshop_hours;
        $workshop->description = $request->workshop_desc;
        $workshop->user_id = $request->user_id;
        $workshopSave = $workshop->save();

        if($workshopSave){
            return redirect('/dashboard/workshops')->with('message','Record Have Been Added');
        }
    }

    public function userWorkshopDelete($id){

        $workshop = Workshop::find($id);
        $workshopDeleted = $workshop->delete();
        if($workshopDeleted){
            return redirect('/dashboard/workshops')->with('deleted','Deleted Successfully!!');
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
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop $workshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshop $workshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshop $workshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
        //
    }
}
