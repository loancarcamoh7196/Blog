@extends('admin.templates.home')
@section('title','Admin | Home')
@section('article_title','Dashboard')

@section('content')

    
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}    
                </div>
            @endif
           
        </div>
    

    <main role="main" class="inner cover">
        <h1 class="cover-heading">
            Bienvenid@ {{ Auth::user()->name }}
        </h1>
        <p class="lead">
            Podras editar desde aqui, lo que desees sin problemas.
        </p>
        <p class="lead">
            <a href="{{ route('articles.create') }}" class="btn btn-lg btn-secondary">Realizar POST [Articulo]</a>
        </p>
    </main>
        
    
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
@endsection
