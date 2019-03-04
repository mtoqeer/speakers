<?php

namespace App\Http\Controllers;
use App\User;
use App\Presentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userPresentationIndex()
    {

        $userid = auth()->user()->id;
        $getPresentation = DB::table('users')
            ->join('presentations', 'users.id', '=', 'presentations.user_id')
            ->select('presentations.*')
            ->where('presentations.user_id' , $userid)->get();
        return view('user.presentations')->with('getPresentation', $getPresentation);
    }

    public function userPresentationSave(Request $request)
    {
        $presentation = new Presentation();
        $presentation->title = $request->presentation_title;
        $presentation->description = $request->presentation_desc;
        $presentation->user_id = $request->user_id;
        $presentationSave = $presentation->save();

        if($presentationSave){
            return redirect('/dashboard/presentations')->with('message','Article Have Been Added');
        }
    }

    public function userPresentationDelete($id){

        $presentation = Presentation::find($id);
        $presentationDeleted = $presentation->delete();
        if($presentationDeleted){
            return redirect('/dashboard/presentations')->with('deleted','Deleted Successfully!!');
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
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(Presentation $presentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Presentation $presentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presentation $presentation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentation $presentation)
    {
        //
    }
}
