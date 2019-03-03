<?php

namespace App\Http\Controllers;
use App\User;
use App\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userAchievementIndex()
    {

        $userid = auth()->user()->id;
        $getachievement = DB::table('users')
            ->join('achievements', 'users.id', '=', 'achievements.user_id')
            ->select('achievements.*')
            ->where('achievements.user_id' , $userid)->get();
        return view('user.achievements')->with('getachievement', $getachievement);
    }

    public function userAchievementSave(Request $request)
    {
        $expertise = new Achievement();
        $expertise->title = $request->acheivement_title;
        $expertise->description = $request->achievement_desc;
        $expertise->user_id = $request->id;
        $expertisesave = $expertise->save();

        if($expertisesave){
            return redirect('/dashboard/achievements')->with('message','Achievement Have Been Added');
        }
    }

    public function userAchievementDelete($id){

        $achievement = Achievement::find($id);
        $achievementdeleted = $achievement->delete();
        if($achievementdeleted){
            return redirect('/dashboard/achievements')->with('deleted','Deleted Successfully!!');
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
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievement $achievement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievement $achievement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        //
    }
}
