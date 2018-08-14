@extends('admin.templates.main')

@section('title','Articulos')
@section('article_title','Articulos')

@section('func')
	<nav class="navbar navbar-light bg-light" >
		
			<a href="{{ route('articles.create') }}" class="btn btn-outline-info btn-rounded btn-mg " tabindex="-1" role="button" aria-disabled="false"> 
				<i class="fas fa-plus" aria-hidden="true"> </i> Agregar
			</a>
		
			{!! Form::open(['route'=>'articles.index','method'=>'GET','class' =>"form-inline"  ]) !!}
				<div class="input-group">
					{!! Form::text('title',null,['class' =>"form-control mr-sm-2",'type'=> "search", 'aria-label' => "Search",'placeholder'=>'Buscar ...' ]) !!}
					 
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>	
				</div>
			{!! Form::close() !!}
		
	</nav>
@endsection

@section ('content')
	
	<div class="table-responsive-xl">
		<table  class="table table-dark">
			<thead>
				<tr>
					<th scope="col"> ID</th>
					<th scope="col"> Titulo</th>
					<th scope="col"> Contenido</th>
					<th scope="col"> User ID</th>
					<th scope="col">  Category ID</th>
					<th scope="col"> Acción</th>
				</tr>
			</thead>
			<tbody>

				@foreach($list as $a)
					<tr>
						<th scope="row">{{ $a->id }} </th>
						<td>{{ $a->title }}</td>
						<td>{{ $a->content }}</td>
						<td>{{ $a->user_id }}</td>
						<td>{{ $a->category_id }}</td>
						
						<td>
							<a href="{{ route('articles.edit',$a->id) }}" class="btn btn-warning">
								<i class="fa fa-wrench" aria-hidden="true"></i>
							</a>
							<a href="{{  route('articles.destroy',$a->id)  }}" onclick="return confirm('¿Desea eliminar este registro?')" class="btn btn-danger">
								<i class="fa fa-minus-circle" aria-hidden="true"></i>
							</a>
						</td>
					</tr>
				@endforeach
				
			</tbody>
		</table>
		
	</div>
	{!! $list-> render() !!}

@endsection