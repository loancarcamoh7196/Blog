@extends('templates.main')

@section('title','Inicio')
@section('article_title','Articulo Titulo')

	

@section ('content')
    
   
    	<div class="blog-post">
    		@if($article->category->name == 'Programación' or $article->category->name == 'Noticias') <strong class="d-inline-block mb-2 text-success">{{ $article->category->name }}</strong>
    		@elseif($article->category->name == 'Laravel')<strong class="d-inline-block mb-2 text-danger">{{ $article->category->name }}</strong>
    		@else
				<strong class="d-inline-block mb-2 text-warning">{{ $article->category->name }}</strong>
    		@endif
            <div class="blog-post-title pb-3 mb-5 font-italic border-bottom">
            	<h1>{{ $article->title }}</h1> 
            </div>
            
            <p class="blog-post-meta">
            	Escrito por <a href="#">{{ $article->user->name }}</a>
            	~ Hace {{ $article->created_at->diffForHumans() }}
            	<br>	
            </p>
			@foreach ($article->images as $image)
				
				<div class="card mb-2 shadow-sm">
					<img class="card-img-top"  src="{{ asset('images/articles/'.$image->name) }}"  data-holder-rendered="true" style="height: 325px; width: 95%; display: block;" />
				</div>

				<br>
					<p>
					{{ $article->content}}
				</p>
				 <br>
			
				<a href="{{ route('front.index') }}" class="btn btn-outline-danger"> Volver a Home</a>
			@endforeach     
        </div><!-- /.blog-post -->
    
		
@endsection