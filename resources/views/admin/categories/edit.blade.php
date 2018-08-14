@extends('admin.templates.main')

@section('title','Editar Categoria')
@section('article_title','Editar Categoria')

@section ('content')
	{!! Form::model($categoria, array('route' => array('categories.update', $categoria->id), 'method' => 'PUT')) !!}	

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',$categoria->name,['class'=>'form-control','placeholder' =>'Ej: Noticias','required']) !!}
		</div>

		<div class="form-group">
			{!!Form::submit('Editar', ['class' => 'btn btn-primary'])  !!}
		</div>
	{!! Form::close() !!}
@endsection