@extends('layouts.admin')

@section('pageTitle')
	Add Brand
@endsection

@section('content')

<br><br><br>
<div class="row">
<div class="col-lg-6 mx-auto">
  
    <div class="card">
   
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Add Brand Form</h3>
    </div>

    <div class="card-body">
      <p>Introduce a new brand with its information into the system.</p>

      	{!! Form::open( ['action' => 'BrandController@store', 'method' => 'POST', 'files' => true ]) !!}

			{{ csrf_field() }}

			  <div class="form-group">
			    {{ Form::label('name', 'Name', ['class' => 'form-control-label']) }}
			    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']) }}
			  </div>

			   <div class="form-group">
			     {{ Form::label('foundation', 'Foundation', ['class' => 'form-control-label']) }}
			     {{ Form::text('foundation', '', ['class' => 'form-control', 'placeholder' => '1990']) }}
			  </div>

			  <div class="form-group">
			    {{ Form::label('country', 'Country', ['class' => 'form-control-label']) }}
			    {{ Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'United States']) }}
			  </div>

			  <div class="form-group">
			    {{ Form::label('catchword', 'Catchword', ['class' => 'form-control-label']) }}
			    {{ Form::text('catchword', '', ['class' => 'form-control', 'placeholder' => 'Born to be cool!']) }}
			  </div>

			  <div class="form-group">
			    {{ Form::label('description', 'Description', ['class' => 'form-control-label']) }}
			    {{ Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'This is my history']) }}
			  </div>

			  <div class="form-group">
			    {{ Form::label('website', 'Website', ['class' => 'form-control-label']) }}
			    {{ Form::text('website', '', ['class' => 'form-control', 'placeholder' => 'www.website.com']) }}
			  </div>

			  <div class="form-group">
			    {{ Form::label('image', 'Image', ['class' => 'form-control-label']) }}
			    {{ Form::file('image', ['class' => 'form-control']) }}
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