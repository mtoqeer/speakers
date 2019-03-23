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
            'profile_image' => 'image|dimensions:width=270,height=308',
        ];
        $customMessages = [
            'image' => 'The file must be an image file',
            'dimensions' => 'Images Must be 270x308',
        ];   
        $this->validate($request, $rules, $customMessages);
        $userMeta = new User_meta();
        $userMeta->country = $request->country;
        $userMeta->fee = $request->fee;
        $userMeta->available_to = $request->available_to;
        $userMeta->volunteer = $request->volunteer;
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
        $rules = [
            'profile_image' => 'required|image|dimensions:width=270,height=308',
        ];
        $customMessages = [
            'required' => 'You have not selected any image',
            'image' => 'The file must be an image file',
            'dimensions:width=270,height=308' => 'Images Must be 270x308',
        ];   
        $this->validate($request, $rules, $customMessages);


        $generalinfo = User_meta::find($request->id);
        
        $generalinfo->country = $request->country;
        $generalinfo->fee = $request->fee;
        $generalinfo->available_to = $request->available_to;
        $generalinfo->volunteer = $request->volunteer;
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
            ,'available_fors.meetup','user_metas.country','user_metas.why_choose','user_metas.available_to','user_metas.profile_img')
            ->where('users.featured','Yes')
            ->where('users.status','approved')->limit(4)->get();
        return view('home', compact('getFeaturedSpeakers'));
    }

    // All Speakers Page
    public function ShowAllSpeakersOnWbsite(){
        $getAllSpeakers = DB::table('users')
            ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
            ->join('available_fors','users.id', '=','available_fors.user_id')
            ->select('users.*','available_fors.conference',
            'available_fors.workshop','available_fors.moderator'
            ,'available_fors.online','available_fors.school'
            ,'available_fors.meetup','user_metas.country','user_metas.fee','user_metas.why_choose','user_metas.available_to','user_metas.profile_img')
            ->where('users.status','approved')->paginate(9);
        return view('speakers', compact('getAllSpeakers'));

    }


    // Single Page
    public function ShowSingleProfileOnWbsite(Request $request, $id){

        $getGeneralInfo = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.id' , $id)->get();

        $getArticles = DB::table('articles')
        ->select('articles.*')
        ->where('articles.user_id' , $id)->get();
        
        $getAchievements = DB::table('achievements')
        ->select('achievements.*')
        ->where('achievements.user_id' , $id)->get();

        $getAvailable_fors = DB::table('available_fors')
        ->select('available_fors.*')
        ->where('available_fors.user_id' , $id)->get();

        $getAwards = DB::table('awards')
        ->select('awards.*')
        ->where('awards.user_id' , $id)->get();

        $getBooks = DB::table('books')
        ->select('books.*')
        ->where('books.user_id' , $id)->get();

        $getCurrentPositions = DB::table('current_positions')
        ->select('current_positions.*')
        ->where('current_positions.user_id' , $id)->get();

        $getSingleCurrentPosition = DB::table('current_positions')
        ->select('current_positions.*')
        ->where('current_positions.user_id' , $id)->first();

        $getDegrees = DB::table('degrees')
        ->select('degrees.*')
        ->where('degrees.user_id' , $id)->get();

        $getExpertises = DB::table('expertises')
        ->select('expertises.*')
        ->where('expertises.user_id' , $id)->get();

        $getImages = DB::table('images')
        ->select('images.*')
        ->where('images.user_id' , $id)->get();

        $getPastTalks = DB::table('past_talks')
        ->select('past_talks.*')
        ->where('past_talks.user_id' , $id)->get();

        $getPresentations = DB::table('presentations')
        ->select('presentations.*')
        ->where('presentations.user_id' , $id)->get();

        $getSocialMediaAccounts = DB::table('social_media_accounts')
        ->select('social_media_accounts.*')
        ->where('social_media_accounts.user_id' , $id)->first();

        $getVideos = DB::table('videos')
        ->select('videos.*')
        ->where('videos.user_id' , $id)->get();

         $getWorkShops = DB::table('workshops')
        ->select('workshops.*')
        ->where('workshops.user_id' , $id)->get();

        $getAvailableFor = DB::table('available_fors')
        ->select('available_fors.*')
        ->where('available_fors.user_id' , $id)->get();

        return view('/single', compact('getGeneralInfo','getWorkShops', 'getVideos','getSocialMediaAccounts', 
        'getPresentations', 'getPastTalks','getImages','getExpertises','getDegrees','getCurrentPositions',
        'getBooks', 'getAwards','getAvailable_fors','getAchievements','getArticles','getSingleCurrentPosition','getAvailableFor'));

    }

   
}
