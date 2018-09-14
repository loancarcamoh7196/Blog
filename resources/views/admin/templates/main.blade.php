<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> @yield('title','Default') | Blog M&M</title>
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')  }}">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen_v1.8.7/chosen.css') }}">

		<link href="{{ asset('css/sticky-footer-navbar.css') }}" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/trumbo/ui/trumbowyg.css') }}">

		@yield('css')
	</head>
	<body style="">
		<div class="container-fluid">

			@include('admin.templates.partials.header')
			@include('admin.templates.partials.nav')
		
			<main role="main" class="container">
		     	<div class="row">
			        <div class="col-md-12 blog-main">
			        	<!-- Titulo de Articulo -->
				        <h3 class="pb-3 mb-4 font- border-bottom">
							<br>

				            @yield('article_title','default')
				        </h3>
					
							
			          <!-- Post -->
			          	<section class="body">
			          		@yield('func')
			          		@include('flash::message')
							@include('admin.templates.partials.errors')
							@yield('content')
							
						</section>
			        </div><!-- Fin  Post -->
		    	</div><!-- /.row -->

		    </main><!-- /.container -->

			<br>
			<footer class="card-footer text-center">
			    <p>
			    	Blog M & M 
			    	<a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.
			    </p>
			    <p>
		        	<a href="#">Back to top</a>
		      	</p>
		    </footer>
		</div>
			
		<script src="{{ asset('plugins/jquery/jquery-3.3.1.js') }}"></script>
		<script src="{{ asset('plugins/jquery/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('plugins/trumbo/trumbowyg.min.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<script src="{{  asset('plugins/chosen_v1.8.7/chosen.jquery.js') }} "></script>
		@yield('js')	
	</body>
</html>