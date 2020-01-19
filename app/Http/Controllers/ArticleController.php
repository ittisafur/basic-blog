<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        if($request->has('featured_image')){

            $featured_image = $request->file('featured_image');
            $featured_image_name = time() . '.'.$featured_image->getClientOriginalExtension();
            $featured_image_path = public_path('/images/featured_image/');
            $featured_image->move($featured_image_path, $featured_image_name);

            $article = new Article();
            $article->title = $request['title'];
            $article->description = $request['description'];
            $article->featured_image = '/images/featured_image/' . $featured_image_name;
            $article->user_id = auth()->user()->id;
            $article->save();
        }else{
            $article = new Article();
            $article->title = $request['title'];
            $article->description = $request['description'];
            $article->user_id = auth()->user()->id;
            $article->save();
        }
        return redirect()->route('account');        
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
