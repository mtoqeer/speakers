<?php

namespace App\Http\Controllers;
use App\User;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userVideoIndex()
    {
        $userid = auth()->user()->id;
        $getVideo = DB::table('users')
            ->join('videos', 'users.id', '=', 'videos.user_id')
            ->select('videos.*')
            ->where('videos.user_id' , $userid)->get();
        return view('user.videos')->with('getVideo', $getVideo);
    }

    public function userVideoSave(Request $request)
    {
        $videos = new Video();
        $videos->link = $request->speaker_video;
        $videos->user_id = $request->user_id;
        $VideoSave = $videos->save();

        if($VideoSave){
            return redirect('/dashboard/videos')->with('message','Record Have Been Added');
        }
    }

    public function userVideoDelete($id){

        $video = Video::find($id);
        $videoDeleted = $video->delete();
        if($videoDeleted){
            return redirect('/dashboard/videos')->with('deleted','Deleted Successfully!!');
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
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
