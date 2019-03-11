<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }
    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.dashboard.home');
    }


    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    

    // Get Speaker Data On Admin HomePage

    public function adminIndex(){
        
        $getApprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'approved')->get();

        $getUnapprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'unapproved')->limit(20)->get();

        return view('admin.dashboard.home', compact('getApprovedSpeakers','getUnapprovedSpeakers'));
    }

    // Get Data On Active Speakers Page

    public function showactivespeakers(){
        $getApprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.featured' , 'No')
        ->where('users.status' , 'approved')->paginate(13);
        return view('admin.dashboard.active' , compact('getApprovedSpeakers'));
    }


    // Get Data On Inactive Speakers Page

    public function showinactivespeakers(){
        $getUnapprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'unapproved')->paginate(13);
        return view('admin.dashboard.inactive', compact('getUnapprovedSpeakers'));
    }

    // Show Featured
    public function showFeaturedSpeaker(){
        $getFeaturedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.featured' , 'Yes')
        ->where('users.status' , 'approved')->paginate(13);
        return view('admin.dashboard.featured', compact('getFeaturedSpeakers'));
    }

    // Status Changed To Featured
    public function changeToFeaturedSpeakers(Request $request){
        DB::table('users')->where('id', $request->id)->update(['featured' => 'Yes']);
        
        $getApprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.featured' , 'No')
        ->where('users.status' , 'approved')->paginate(13);
        
        return view('admin.dashboard.active' , compact('getApprovedSpeakers'));
    }

    // Status Changed To UnFeatured
    public function changeToUnfeaturedSpeakers(Request $request){
        DB::table('users')->where('id', $request->id)->update(['featured' => 'No']);
        
        $getFeaturedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.featured' , 'Yes')
        ->where('users.status' , 'approved')->paginate(13);
        return view('admin.dashboard.featured', compact('getFeaturedSpeakers'));
    }


    // Status Change To Approve
    public function changeToApprovespeakers(Request $request){

        DB::table('users')->where('id', $request->id)->update(['status' => 'approved']);
        
        $getUnapprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'unapproved')->paginate(13);

        return view('admin.dashboard.inactive', compact('getUnapprovedSpeakers'));
        
    }

    // Status Changed To Unapproved
    
    public function changeToUnapprovespeakers(Request $request){

        DB::table('users')->where('id', $request->id)->update(['status' => 'unapproved']);

        $getApprovedSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->select('user_metas.*', 'users.*')
        ->where('users.status' , 'approved')->paginate(13);

        return view('admin.dashboard.active', compact('getApprovedSpeakers'));
       
    }

    // User Delete
    public function userDelete($id){
        $user = User::find($id);
        $userDeleted = $user->delete();
        if($userDeleted){
            return redirect('/admin/inactive-speakers')->with('deleted','Deleted Successfully!!');
        }
    }
    

    // View Single Profile Of Speakers
    
    
    public function showProfilePage($id){

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
        ->where('social_media_accounts.user_id' , $id)->get();

        $getVideos = DB::table('videos')
        ->select('videos.*')
        ->where('videos.user_id' , $id)->get();

         $getWorkShops = DB::table('workshops')
        ->select('workshops.*')
        ->where('workshops.user_id' , $id)->get();

        $getAvailableFor = DB::table('available_fors')
        ->select('available_fors.*')
        ->where('available_fors.user_id' , $id)->get();




        return view('admin.dashboard.profile', compact('getGeneralInfo','getWorkShops', 'getVideos','getSocialMediaAccounts', 
        'getPresentations', 'getPastTalks','getImages','getExpertises','getDegrees','getCurrentPositions',
        'getBooks', 'getAwards','getAvailable_fors','getAchievements','getArticles','getSingleCurrentPosition','getAvailableFor'));

    }

}