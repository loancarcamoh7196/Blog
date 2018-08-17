@extends('admin.templates.main')

@section('title','Galeria Imagenes')
@section('article_title','Imagenes')



@section ('content')
<!--
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="{{ asset('images/articles/blog_m_and_m_1533845471.jpg') }}" alt="First slide">
	   	</div>
		<div class="carousel-item">
	    	<img class="d-block w-100" src="{{ asset('images/articles/blog_m_and_m_1533845939.jpg') }}" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      	<img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
	    </div>
	 </div>

	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
</div>
-->
	
	<br>

	<div class="row">
		@foreach ($images as $img)
			<div class="card-body">

				<div class="card mb-4 shadow-sm">
					<img src="/images/articles/{{ $img->name }}" class="crad-img-top" style="height: 200px; width:200px; display: block;" " alt="Thumbnail data-holder-rendered="true">
				
				<div class="d flex- justify-content-between align-items-center">
					
					<div class="btn-group">
						<button class="btn btn-sm btn-outline-secundary">Ver</button>
						<button class="btn btn-sm btn-outline-secundary">Editar</button>
						<small class="text-muted">9mins</small>
					</div>
				</div>	
				</div>
			</div>
		@endforeach

		
	</div>
	{!! $images-> render() !!}
@endsection