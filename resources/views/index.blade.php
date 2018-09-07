@extends('templates.main')

@section('title','Inicio')
@section('article_title','Articulo Titulo')

	

@section ('content')
    
    @foreach ($articles as $a)
    	<div class="blog-post">
    		 <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h2 class="blog-post-title">$a->title</h2>
            <p class="blog-post-meta">$a->created_at <a href="#">$a->user->name</a></p>
			<a href="#" class="thumbnail">
				@foreach ($a->images as $image)
					<img class="img-responsive img-article" src="{{ asset('images/articles/'.$image->name) }}">{{ $image->name }}
				@endforeach
			</a>
            <p>$a->content</p>
        </div><!-- /.blog-post -->
    @endforeach

	{{ $articles->render() }}
@endsection

