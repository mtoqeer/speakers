<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllSearchQueriesController extends Controller
{
    public function homePageSearch(Request $request){
    
        $searchQuery = $request->search_query;

        $getAllSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->join('available_fors','users.id', '=','available_fors.user_id')
        ->join('expertises','users.id', '=','expertises.user_id')
        ->select('users.*','available_fors.conference',
        'available_fors.workshop','available_fors.moderator'
        ,'available_fors.online','available_fors.school'
        ,'available_fors.meetup','user_metas.country'
        ,'user_metas.fee','user_metas.why_choose','user_metas.available_to'
        ,'user_metas.profile_img', 'expertises.expertise_topic')
        ->where('expertises.expertise_topic', 'LIKE', '%' . $searchQuery . '%')
        ->where('users.status','approved')->paginate(9);
    return view('speakers', compact('getAllSpeakers'));

      

    }


    public function speakerssearch(Request $request){
        $searchFee = $request->fee;
        $searchLang = $request->language;
        $searchCountry = $request->country;
        $searchTopic = $request->topic;
        $searchGender = $request->gender;
        $searchAvlTo = $request->available_to;


        $getAllSpeakers = DB::table('users')
        ->join('user_metas', 'users.id', '=', 'user_metas.user_id')
        ->join('expertises','users.id', '=','expertises.user_id')
        ->join('available_fors','users.id', '=','available_fors.user_id')
        ->join('languages','users.id', '=','languages.user_id')
        ->select('users.*','available_fors.conference',
        'available_fors.workshop','available_fors.moderator'
        ,'available_fors.online','available_fors.school'
        ,'available_fors.meetup','user_metas.country'
        ,'user_metas.fee','user_metas.why_choose','user_metas.available_to'
        ,'user_metas.profile_img', 'expertises.expertise_topic','languages.language','user_metas.gender')
        ->where('expertises.expertise_topic', 'LIKE', '%' . $searchTopic . '%')
        ->where('user_metas.fee', 'LIKE', '%' . $searchFee . '%')
        ->where('user_metas.country', 'LIKE', '%' . $searchCountry . '%')
        ->where('user_metas.available_to', 'LIKE', '%' . $searchAvlTo . '%')
        ->where('user_metas.gender', 'LIKE', '%' . $searchGender . '%')
        ->where('languages.language', 'LIKE', '%' . $searchLang . '%')
        ->where('users.status','approved')->paginate(9);
    return view('speakers', compact('getAllSpeakers'));


    }
}
