<?php

namespace App\Http\Controllers;
use App\User;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userArticleIndex()
    {

        $userid = auth()->user()->id;
        $getArticle = DB::table('users')
            ->join('articles', 'users.id', '=', 'articles.user_id')
            ->select('articles.*')
            ->where('articles.user_id' , $userid)->get();
        return view('user.articles')->with('getArticle', $getArticle);
    }

    public function userArticleSave(Request $request)
    {
        $article = new Article();
        $article->title = $request->article_title;
        $article->link = $request->article_link;
        $article->user_id = $request->user_id;
        $articleSave = $article->save();

        if($articleSave){
            return redirect('/dashboard/articles')->with('message','Article Have Been Added');
        }
    }

    public function userArticleDelete($id){

        $article = Article::find($id);
        $articleDeleted = $article->delete();
        if($articleDeleted){
            return redirect('/dashboard/articles')->with('deleted','Deleted Successfully!!');
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
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
