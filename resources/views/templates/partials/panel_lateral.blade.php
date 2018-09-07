<aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Sobre </h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Categorias</h4>
            <ol class="list-unstyled mb-0">
              @foreach ($categories as $c)
                <li>
                  <a href="{{ route('front.search.category',$c->name) }}">{{ $c->name }}</a> 
                  <a href="#" class="btn btn-sm btn-danger"> {{ $c->articles->count() }}</a>
                </li>
              @endforeach
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Tags</h4>
            <ol class="list-unstyled">
              @foreach ($tags as $t)
                  <a href="{{ route('front.search.tag',$t->name) }}" class="btn btn-sm btn-outline-success">{{ $t->name }}</a> 
              @endforeach
            </ol>
          </div>
</aside><!-- /.blog-sidebar -->