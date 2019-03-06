<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Social_media_account;
use Illuminate\Support\Facades\DB;

class SocialMediaAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userSocialMediaAccountIndex()
    {
        $userid = auth()->user()->id;
        $getSocialAccount = DB::table('users')
            ->join('social_media_accounts', 'users.id', '=', 'social_media_accounts.user_id')
            ->select('social_media_accounts.*')
            ->where('social_media_accounts.user_id' , $userid)->get();
        return view('user.social-media-accounts')->with('getSocialAccount', $getSocialAccount);
    }

    public function userSocialMediaAccountSave(Request $request)
    {
        $socialAccount = new Social_media_account();
        $socialAccount->facebook = $request->facebook_link;
        $socialAccount->twitter = $request->twitter_link;
        $socialAccount->instagram = $request->instagram_link;
        $socialAccount->youtube = $request->youtube_link;
        $socialAccount->linkdin = $request->linkedin_link;
        $socialAccount->website = $request->website_link;
        $socialAccount->skype = $request->skype_link;
        $socialAccount->user_id = $request->user_id;
        $socialAccountSave = $socialAccount->save();

        if($socialAccountSave){
            return redirect('/dashboard/social-media-accounts')->with('message','Record Have Been Added');
        }
    }

    public function userSocialMediaAccountUpdate(Request $request){
        $socialAccount = Social_media_account::find($request->id);

        $socialAccount->facebook = $request->facebook_link;
        $socialAccount->twitter = $request->twitter_link;
        $socialAccount->instagram = $request->instagram_link;
        $socialAccount->youtube = $request->youtube_link;
        $socialAccount->linkdin = $request->linkedin_link;
        $socialAccount->website = $request->website_link;
        $socialAccount->skype = $request->skype_link;
        $socialAccountSave = $socialAccount->save();

        if($socialAccountSave){
            return redirect('/dashboard/social-media-accounts')->with('message','Record Have Been Updated');
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
     * @param  \App\Social_media_account  $social_media_account
     * @return \Illuminate\Http\Response
     */
    public function show(Social_media_account $social_media_account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Social_media_account  $social_media_account
     * @return \Illuminate\Http\Response
     */
    public function edit(Social_media_account $social_media_account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Social_media_account  $social_media_account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social_media_account $social_media_account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Social_media_account  $social_media_account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social_media_account $social_media_account)
    {
        //
    }
}
