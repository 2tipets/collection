@extends('layouts.admin')

@section('pageTitle')
	Add Collection
@endsection

@section('content')

<br><br><br>

<div class="row">
<div class="col-lg-6 mx-auto">
  
    <div class="card">
   
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Add Collection Form</h3>
    </div>

    <div class="card-body">
      <p>Introduce a new Collection with its information into the system.</p>
		
		{!! Form::open( ['action' => 'AdminController@addCollection', 'method' => 'POST', 'files' => true ]) !!}

			{{ csrf_field() }}

			  <div class="form-group">
			    {{ Form::label('name', 'Name', ['class' => 'form-control-label']) }}
			    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']) }}
			  </div>

			  <div class="form-group">
    			{{ Form::label('image', 'Image', ['class' => 'form-control-label']) }}
			    {{ Form::file('image', ['class' => 'form-control']) }}
			  </div>

			  <div class="form-group">
			    {{ Form::label('brand', 'Brand', ['class' => 'form-control-label']) }}
			    {{ Form::select('brand', $brands, 0, ['class' => 'form-control']) }}
			  </div>

			  <div class="form-group">
			    {{ Form::label('franchise', 'Franchise', ['class' => 'form-control-label']) }}
			    {{ Form::select('franchise', $franchises, 0, ['class' => 'form-control']) }}
			  </div>

			<div class="form-group">
				{{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
			 </div>
	
		{!! Form::close() !!}


 </div>
  </div>
</div>
</div>	

@endsection