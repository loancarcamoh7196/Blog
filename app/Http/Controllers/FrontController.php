<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use App\Category;
use App\Tag;


class FrontController extends Controller
{
    
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $articles = Article::orderBy('id','DESC')->paginate(5);
        $articles->each(function ($articles)
        {
            $articles->category;
            $articles->images;
        });

        return view('front.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::orderBy('id','DESC')->paginate(5);
        $articles->each(function ($articles)
        {
            $articles->category;
            $articles->images;
        });
        return view('front.articles')->with('articles',$articles);
    }


    public function searchCategory($name)
    {
        $category = Category::Search($name)->first();
        $articles = $category->articles()->paginate(5);

        $articles->each(function ($articles)
        {
            $articles->category;
            $articles->images;
        });

        return view('front.index')->with('articles',$articles);
    }

    public function viewArticle($slug)
    {
        $article = Article::findBySlugOrFail($slug);
        $article->category;
        $article->user;
        $article->tags;
        return view('front.articles')->with('article',$article);
    }
  
}
