<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;
use Laracats\Flash\Flash;
use App\Image;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $a = Article::orderby('id','ASC')->orderby('id','ASC')->paginate(5);

        return view('admin.articles.index')->with('list',$a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::orderby('name','ASC')->pluck('name','id');
        $tags = Tag::orderby('name','ASC')->pluck('name','id');

        return view('admin.articles.create')->with('cats',$categories)->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //Manipulación imagenes
        
        if($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'blog_m_and_m_' . time() .'.'.$file -> getClientOriginalExtension();
            $path = public_path().'\images\articles/';

            $file->move($path,$name);
        }
        
        
        $article = new Article($request->all());
        $article ->user_id =  \Auth::user()->id;
        $article->save();

        $image =  new Image();
        $image-> name = $name;
        $image->article()->associate($article);
        $image ->save();

        $article->tags()->sync($request->tags);

        Flash("Se ha agregado articulo: ".$article->title." existosamente",'success')->important();

        return redirect()->route('articles.index');       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
