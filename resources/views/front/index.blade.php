@extends('templates.main')

@section('title','Inicio')
@section('article_title','Articulo Titulo')

	

@section ('content')
    <div class="col-md-8 blog-main">
    @foreach ($articles as $a)
    	<div class="blog-post">
    		@if($a->category->name == 'Programación' or $a->category->name == 'Noticias') <strong class="d-inline-block mb-2 text-success">{{ $a->category->name }}</strong>
    		@elseif($a->category->name == 'Laravel')<strong class="d-inline-block mb-2 text-danger">{{ $a->category->name }}</strong>
    		@else
				<strong class="d-inline-block mb-2 text-warning">{{ $a->category->name }}</strong>
    		@endif
            <h2 class="blog-post-title pb-3 mb-4 font-italic border-bottom">
            	{{ $a->title }}
            </h2>
            
            <p class="blog-post-meta">
            	Escrito por <a href="#">{{ $a->user->name }}</a>
            	~ Hace {{ $a->created_at->diffForHumans() }}
            	<br>	
            </p>
			@foreach ($a->images as $image)
				
				<div class="card mb-2 shadow-sm">
						<img class="card-img-top"  src="{{ asset('images/articles/'.$image->name) }}"  data-holder-rendered="true" style="height: 325px; width: 95%; display: block;" />
				</div>
				{{ $a->content}}
				<br> <br>
				<a href="{{ route('front.view.article',$a->slug) }}" class="btn btn-outline-primary"> Ver más...</a>
			@endforeach     
        </div><!-- /.blog-post -->
    @endforeach
    {{ $articles->render() }}
</div>
@endsection

