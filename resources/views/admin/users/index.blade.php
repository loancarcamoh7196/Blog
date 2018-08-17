@extends('admin.templates.main')

@section('title','Usuarios')
@section('article_title','Usuarios')

@section('func')
	<nav class="navbar navbar-light bg-dark" >
		
			<a href="{{ route('users.create') }}" class="btn btn-outline-info btn-rounded btn-mg " tabindex="-1" role="button" aria-disabled="false"> 
				<i class="fas fa-plus" aria-hidden="true"> </i> Agregar
			</a>
		
			{!! Form::open(['route'=>'users.index','method'=>'GET','class' =>"form-inline"  ]) !!}
				<div class="input-group">
					{!! Form::text('name',null,['class' =>"form-control mr-sm-2 bg-dark text-light",'type'=> "search", 'aria-label' => "Search",'placeholder'=>'Buscar ...' ]) !!}
					 
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>	
				</div>
			{!! Form::close() !!}
		
	</nav>
@endsection

@section ('content')
	
	<div class="table-responsive-xl">
		<table  class="table table-dark table-hover">
			<thead>
				<tr>
					<th scope="col"> ID</th>
					<th scope="col"> Nombre</th>
					<th scope="col"> Correo Electronico</th>
					<th scope="col"> Tipo</th>
					<th scope="col"> Acción</th>
				</tr>
			</thead>
			<tbody>

				@foreach($users as $user)
					<tr>
						<th scope="row">{{ $user->id }} </th>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							@if($user->type == "admin")
								<span class="btn btn-danger"> {{ $user->type }}</span>
							@else
								<span class="btn btn-primary"> {{ $user->type }}</span>
							@endif
						</td>
						<td>
							<a href="{{ route('users.edit',$user->id) }}" class="btn btn-warning">
								<i class="fa fa-wrench" aria-hidden="true"></i>
							</a>
							<a href="{{  route('users.destroy',$user->id)  }}" onclick="return confirm('¿Desea eliminar este registro?')" class="btn btn-danger">
								<i class="fa fa-minus-circle" aria-hidden="true"></i>
							</a>
						</td>
					</tr>
				@endforeach
				
			</tbody>
		</table>
		
	</div>
	{!! $users-> render() !!}
@endsection
