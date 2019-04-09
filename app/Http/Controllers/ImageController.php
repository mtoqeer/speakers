<?php

namespace App\Http\Controllers;
use App\User;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userImageIndex()
    {
        $userid = auth()->user()->id;
        $getImage = DB::table('users')
            ->join('images', 'users.id', '=', 'images.user_id')
            ->select('images.*')
            ->where('images.user_id' , $userid)->get();
        return view('user.images')->with('getImage', $getImage);
    }

    public function userImageSave(Request $request)
    {
        $rules = [
            'images' => 'required|image',
        ];
        $customMessages = [
            'required' => 'You have not selected any image',
            'image' => 'The file must be an image file',
        ];   
        $this->validate($request, $rules, $customMessages);

        $image = new Image();
        $image->user_id = $request->user_id;

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension(); //getting Image Extension
            $filename = time() . '.' . $extension;
            $file->move('adminassets/img/speakerimages', $filename);
            $image->path = $filename;
        } 

        $imageSaved = $image->save();
        if($imageSaved){
                return redirect('/dashboard/images')->with('message','Image Have Been Added');
        }


    }

    public function userImageDelete($id){

        $images = Image::findOrFail($id);
        if($images){
            unlink('adminassets' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'speakerimages' . DIRECTORY_SEPARATOR . $images->path);
            $images->delete();
        }

        return redirect('/dashboard/images')->with('deleted','Deleted Successfully!!');

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
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
