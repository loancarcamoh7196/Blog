@extends('admin.template.main')

@section('title','Home')
@section('article_title','Articulo Titulo')


@section ('content')
    
    <div class="blog-post">
            <h2 class="blog-post-title">@yield('article_title','Default')</h2>
            <p class="blog-post-meta">@yield('date_article','Enero 1, 2014 ') by <a href="#">@yield('username','username')</a></p>

           
    </div><!-- /.blog-post -->

@endsection
