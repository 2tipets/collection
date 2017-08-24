@extends('admin.master')

@section('content')

	<div class="col-lg-8 col-lg-offset-2">
		
		{!! Form::open( ['action' => 'addcollection', 'method' => 'POST', 'files' => true ]) !!}

			{{ csrf_field() }}

			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
			  </div>

			  <div class="form-group">
			    <label for="image">Imatge</label>
			    <input type="file" id="image" name="image">
			  </div>

			  <div class="form-group">
			    <label for="brand">Marca</label>
			    <input type="text" class="form-control" id="brand" placeholder="Brand">
			  </div>

			  <div class="form-group">
			    <label for="franchise">Franquicia</label>
			    <input type="text" class="form-control" id="franchise" placeholder="Franchise">
			  </div>

			<button type="submit" class="btn btn-default">Submit</button>
	
		{!! Form::close() !!}


	</div>
@endsection