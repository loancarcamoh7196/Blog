<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> @yield('title','Default') | Blog M&M</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')  }}">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen_v1.8.7/chosen.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}">
    @yield('css')

</head>
	<body>
		<div class="container-fluid">

			@include('templates.partials.header')
			@include('templates.partials.nav')
			
			<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
			<main role="main" class="container">
		      	<div class="row">
		        	<div class="col-md-8 blog-main">
			        	<!-- Titulo de Articulo -->
				        <h3 class="pb-3 mb-4 font-italic border-bottom">
				            @yield('article_title','default')
				        </h3>
				
			          <!-- Post -->
			          	<section class="card-body">
							@include('flash::message')
							@include('templates.partials.errors')
							@yield('content')
						</section><!-- Fin  Post -->
					</div>	        
		      	</div><!-- /.row -->
		    </main><!-- /.container -->

			<footer class="card-footer ">
		      <p>Blog M & M <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
		      <p>
		        <a href="#">Back to top</a>
		      </p>
		    </footer>
		</div>
		<script src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('plugins/chosen_v1.8.7/chosen.jquery.js') }}"></script>
		<script scr="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>
		
		@yield('js')
		 <script>
	      Holder.addTheme('thumb', {
	        bg: '#55595c',
	        fg: '#eceeef',
	        text: 'Thumbnail'
	      });
	    </script>
	</body>
</html>