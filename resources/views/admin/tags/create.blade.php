@extends('admin.templates.main')

@section('title','Agregar Tags')
@section('article_title','Agregar Tags')

@section ('content')
	{!! Form::open(['route'=> 'tags.store','method' =>'POST']) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',null,['class'=>'form-control','placeholder' =>'Ej: Nuevo','required']) !!}
		</div>

		<div class="form-group">
			{!!Form::submit('Registrar', ['class' => 'btn btn-primary'])  !!}
		</div>
	{!! Form::close() !!}
@endsection