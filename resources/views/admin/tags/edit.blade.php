@extends('admin.templates.main')

@section('title','Editar Tags')
@section('article_title','Editarr Tags')

@section ('content')
	{!! Form::model($tag, array('route' => array('tags.update', $tag->id), 'method' => 'PUT')) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',$tag,['class'=>'form-control','placeholder' =>'Ej: Nuevo','required']) !!}
		</div>

		<div class="form-group">
			{!!Form::submit('Editar', ['class' => 'btn btn-primary'])  !!}
		</div>
	{!! Form::close() !!}
@endsection