<nav class="navbar navbar-dark bg-dark navbar-expand-md ">
  <a class="navbar-brand" href="{{ route('admin.index') }}">
    Administrador
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse" >
    <ul class="navbar-nav mr-auto">
            <!--
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            -->

            @if (Auth::user()->isAdmin())
              <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
            </li>
            @endif

            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('articles.index') }}">Articulos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('images.index') }}">Imagenes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('tags.index') }}">Tags</a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="{{ route('front.index') }}">Página Principal</a>
            </li>
            <!--
            <li class="nav-item">
                <a class="nav-link" href="">Link</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            -->
            
        </ul>
        
      </div>
</nav>
