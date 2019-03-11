<?php

namespace App\Http\Controllers;
use App\User;
use App\User_meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userMetaIndex()
    {
        $userid = auth()->user()->id;
        $getUserMeta = DB::table('users')
            ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
            ->select('user_metas.*')
            ->where('user_metas.user_id' , $userid)->get();
        return view('user.general')->with('getUserMeta', $getUserMeta);
    }

    public function userMetaSave(Request $request)
    {
        $rules = [
            'profile_image' => 'required|image',
        ];
        $customMessages = [
            'required' => 'You have not selected any image',
            'image' => 'The file must be an image file',
        ];   
        $this->validate($request, $rules, $customMessages);
        $userMeta = new User_meta();
        $userMeta->country = $request->country;
        $userMeta->fee = $request->fee;
        $userMeta->available_to = $request->available_to;
        $userMeta->volunteer = $request->volunteer;
        $userMeta->languages = $request->languages;
        $userMeta->gender = $request->gender;
        $userMeta->why_choose = $request->why_choose;
        $userMeta->bio = $request->bio;
        $userMeta->user_id = $request->user_id;

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension(); //getting Image Extension
            $filename = time() . '.' . $extension;
            $file->move('adminassets/img/speakerprofileimages', $filename);
            $userMeta->profile_img = $filename;
        } 

       
        $userMetaSave = $userMeta->save();

        if($userMetaSave){
            return redirect('/dashboard/generalinfo')->with('message','Record Have Been Added');
        }
    }

    public function userMetaupdate(Request $request){
        $generalinfo = User_meta::find($request->id);
        
        $generalinfo->country = $request->country;
        $generalinfo->fee = $request->fee;
        $generalinfo->available_to = $request->available_to;
        $generalinfo->volunteer = $request->volunteer;
        $generalinfo->languages = $request->languages;
        $generalinfo->gender = $request->gender;
        $generalinfo->why_choose = $request->why_choose;
        $generalinfo->bio = $request->bio;

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension(); //getting Image Extension
            $filename = time() . '.' . $extension;
            $file->move('adminassets/img/speakerprofileimages', $filename);
            $generalinfo->profile_img = $filename;
        } 

        $userMetaSave = $generalinfo->save();

        if($userMetaSave){
            return redirect('/dashboard/generalinfo')->with('message','Record Have Been Updated');
        }
        
    }


    // All Websites Routes Functions Here
    public function websiteHomePage(){

        $getFeaturedSpeakers = DB::table('users')
            ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
            ->join('available_fors','users.id', '=','available_fors.user_id')
            ->select('users.*','available_fors.conference',
            'available_fors.workshop','available_fors.moderator'
            ,'available_fors.online','available_fors.school'
            ,'available_fors.meetup','user_metas.country','user_metas.why_choose','user_metas.available_to','user_metas.languages','user_metas.profile_img')
            ->where('users.featured','Yes')
            ->where('users.status','approved')->limit(4)->get();


        return view('home', compact('getFeaturedSpeakers'));
    }

   
}
