<header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            
          </div>
          <div class="col-4 text-center">
            <a class="display-1 text-secondary font-weight-light text-" href="#">M & M</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            {{ Auth::user()->name }} &nbsp
            <a class="btn btn-sm btn-danger" href="{{ route('logout') }}">Cerrar sesión</a>
                     
            </a>
          </div>


          
</header>