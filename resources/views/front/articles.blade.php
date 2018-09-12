@extends('templates.main')

@section('title','Inicio')
@section('article_title','Articulo Titulo')

	

@section ('content')
    <div class="col-md-8 blog-main">
   
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
				<div class="card mb-4 shadow-sm">
					<img class="card-img-top"  src="{{ asset('images/articles/'.$image->name) }}"  data-holder-rendered="true"  style="height: 325px; width: 95%; display: block;"/>
				</div>

				<br>
					<p>
					{{ $article->content}}
				</p>
				 <br>
			
				<a href="{{ route('front.index') }}" class="btn btn-outline-danger"> Volver a Home</a>
			@endforeach
			@foreach ($article->tags as $tag)
				<a href="{{ route('front.index') }}" class="btn btn-outline-info"> {{ $tag->name }}</a>
			@endforeach     
        </div><!-- /.blog-post -->
		
		<div>
			<div class="blog-post-title pb-3 mb-5 font-italic border-bottom">
            	<h2>Comentarios</h2> 
            </div>
            <div id="disqus_thread"></div>
			<script>

			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://blog-mio.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
		</div>
    
	</div>	

@endsection

@section('script')
	<script id="dsq-count-scr" src="//blog-mio.disqus.com/count.js" async></script>
@endsection