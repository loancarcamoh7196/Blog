@extends('admin.templates.main')

@section('title','Editar Usuario')
@section('article_title','Editar Usuario')

@section ('content')

	{!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',$user->name,['class' =>'form-control','required','value' => 'Nombre Completo']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo Electronico') !!}
			{!! Form::text('email',$user->email,['class' =>'form-control','required','placeholder' => 'example@gmail.com']) !!}
		</div>

		
		<div class="form-group">
			{!! Form::label('type','Tipo Usuario') !!}
			{!! Form::select('type', [''=>'Seleccione una opción','member'=>'Miembro','admin' =>'Administrador']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>					
	
	{!! Form::close() !!}

@endsection
