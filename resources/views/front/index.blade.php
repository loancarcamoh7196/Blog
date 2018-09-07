@extends('templates.main')

@section('title','Inicio')
@section('article_title','Articulo Titulo')

	

@section ('content')
    
    @foreach ($articles as $a)
    	<div class="blog-post">
    		 <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h2 class="blog-post-title">
            	{{ $a->title }}
            	<span class="btn btn-sm btn-outline-danger "> {!! $a->category->name !!} </span>
            </h2>
            
            <p class="blog-post-meta">{{ $a->created_at }} 
            	Escrito por <a href="#">{{ $a->user->name }}</a>
            	<br>
            	
            </p>
            <p class="blog-post-meta">
            	
            </p>
            
		
				@foreach ($a->images as $image)
			
			<div class="card mb-4 shadow-sm">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Thumbnail [50%x225]" src="{{ asset('images/articles/'.$image->name) }}"  data-holder-rendered="true" style="height: 225px; width: 50%; display: block;">
				<div class="card-body">
				<p class="card-text">{{ $a->title }}</p>

				<div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">…</div>
						<button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
						<button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
					</div>
					<small class="text-muted">{{ $a->created_at->diffForHumans() }}</small>
				</div>
			
			</div>
</div>
				@endforeach
			</a>
			</div>
            <p>{{ $a->content }}</p>
        </div><!-- /.blog-post -->
    @endforeach
    {{ $articles->render() }}

@endsection

