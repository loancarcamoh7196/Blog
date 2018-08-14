@extends('admin.templates.main')

@section('title','Crear Usuario')
@section('article_title','Agregar Usuario')

@section ('content')
	
	

	{!! Form::open(['route' => 'users.store','method' => 'POST']) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',null,['class' =>'form-control','required','placeholder' => 'Nombre Completo']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo Electronico') !!}
			{!! Form::text('email',null,['class' =>'form-control','required','placeholder' => 'example@gmail.com']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password',['class' =>'form-control','required','placeholder' => '***********']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo Usuario') !!}
			{!! Form::select('type', [''=>'Seleccione una opción','member'=>'Miembro','admin' =>'Administrador'],['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>					
	
	{!! Form::close() !!}

@endsection
