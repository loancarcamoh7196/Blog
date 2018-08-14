@extends('admin.templates.main')

@section('title','Editar Articulo')
@section('article_title','Editar Articulo')

@section ('content')
	
	
		{!! Form::model($article, array('route' => array('articles.update', $article->id), 'method' => 'PUT')) !!}
		
	
		
		<div class="form-group">
			{!! Form::label('title','Titulo del Articulo') !!}
			{!! Form::text('title',$article->title,['class' =>'form-control','required','placeholder' => 'Ej: Las buenas nuevas']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id','Categoria') !!}
			{!! Form::select('category_id',$categories,$article->category->id,['class' =>'form-control select-cats','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content','Contenido') !!}
			{!! Form::textarea('content',$article->content,['class' =>'form-control textarea-c','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags','Tags') !!}
			{!! Form::select('tags[]', $tags,$my_tags,['class' => 'form-control select-tag' ,'required', 'multiple']) !!}
		</div>
<!--
		<div class="form-group">
			{!! Form::label('image','Imagen') !!}
			{!! Form::file('image',['id'=>"file_url"]) !!}
			<img id="img_destino" src="#" alt="Tu imagen" style="width: 50%; height: 50%;">
		</div>
-->
		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
			<a href="{{ route('articles.index') }}" class="btn btn-danger">Cancelar</a>
		</div>					
	
	{!! Form::close() !!}

@endsection

@section('js')

	<script >
		$('.select-tag').chosen({
			placeholder_text_multiple: 'Seleccione máximo 5 tags',
			max_selected_options: 5,
			no_results_text: 'No se encontraon tags relacionados.',
			search_contains: true
		});

		$('.select-cats').chosen({
			placeholder_text: 'Seleccione una categoria'
		});

		$('.textarea-c').trumbowyg({
			
		});
	</script>

	<script type="text/javascript">
		function mostrarImagen(input) {
			 if (input.files && input.files[0]) {
			  var reader = new FileReader();
			  reader.onload = function (e) {
			   $('#img_destino').attr('src', e.target.result);
			  }
			  reader.readAsDataURL(input.files[0]);
			 }
			}
			 
			$("#file_url").change(function(){
			 mostrarImagen(this);
			});
	</script>

@endsection
