@if(count($errors)>0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $e)
				<li>{{  $e }}</li>	
				@endforeach
			</ul>
		</div>		
@endif