<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
    
    public function userLanguageIndex()
    {

        $userid = auth()->user()->id;
        $getlanguages = DB::table('users')
            ->join('languages', 'users.id', '=', 'languages.user_id')
            ->select('languages.language','languages.user_id','languages.id')
            ->where('languages.user_id' , $userid)->get();
        return view('user.language')->with('getlanguages', $getlanguages);

    }

    public function userLanguagesave(Request $request)
    {
        $languages = new Language();
        $languages->language = $request->language;
        $languages->user_id = $request->id;
        $languagesSave = $languages->save();

        if($languagesSave){
            return redirect('/dashboard/languages')->with('message','Expertise Have Been Added');
        }

    }

    public function userLanguageDelete($id){

        $expertise = Language::find($id);
        $expertisedeleted = $expertise->delete();

        if($expertisedeleted){
            return redirect('/dashboard/languages')->with('deleted','Deleted Successfully!!');
        }
    }
}
