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
	<body>
		<div class="inner">
				<div class="fixed-top" >
					<div clas>
						<a class="btn btn-sm btn-danger" href="{{ route('logout') }}">Cerrar sesión</a>
						{{ Auth::user()->name }} &nbsp
					</div>	
				</div>
			</div>		
		<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-center">
			
			@include('admin.templates.partials.header-home')
			
		
			<main role="main" class="container">
		     	<div class="row">
			        <div class="col-md-12 blog-main">
			        	
							
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
			<footer class="mastfot mt-auto">
			    <div class="inner">
			    	<p>
				    	Blog M & M 
				    	<a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.
			    	</p>
			    </div>
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