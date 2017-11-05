@extends('layouts.admin')

@section('pageTitle')
	Create new Franchise
@endsection

@section('content')

<br><br><br>
<div class="row">
<div class="col-lg-6 mx-auto">
  
    <div class="card">
   
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Add Franchise Form</h3>
    </div>

    <div class="card-body">
      <p>Introduce a new franchise with its information into the system.</p>

      	{!! Form::open( ['action' => 'FranchiseController@store', 'method' => 'POST', 'files' => true ]) !!}

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
			    {{ Form::label('creator', 'Creator', ['class' => 'form-control-label']) }}
			    {{ Form::text('creator', '', ['class' => 'form-control', 'placeholder' => 'John Doe']) }}
			  </div>

			  <div class="form-group">
			    {{ Form::label('description', 'Description', ['class' => 'form-control-label']) }}
			    {{ Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'This is my history']) }}
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