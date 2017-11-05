@extends('layouts.admin')

@section('pageTitle')
	Add Collection
@endsection

@section('content')

<div class="col-lg-8 col-lg-offset-2">

	{!! Form::open( ['action' => 'AdminController@addFigure', 'method' => 'POST', 'files' => true ]) !!}

		{{ csrf_field() }}

		  <div class="form-group">
		    {!! Form::label('Name') !!}
		    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']) !!}
		  </div>

		  <div class="form-group">
		    {!! Form::label('Year') !!}
		    {!! Form::text('year', '', ['class' => 'form-control', 'placeholder' => 'Year']) !!}
		  </div>

		  <div class="form-group">
		    {!! Form::label('Size') !!}
		    {!! Form::text('size', '', ['class' => 'form-control', 'placeholder' => 'Size']) !!}
		  </div>

		  <div class="form-group">
		    {!! Form::label('Collection') !!}
		    {!! Form::select('collection_id', $collections , 0, ['class' => 'form-control']) !!}
		  </div>

		  <div class="form-group">
		    {!! Form::label('Barcode') !!}
		    {!! Form::text('barcode', '', ['class' => 'form-control', 'placeholder' => 'Barcode']) !!}
		  </div>

		  <div class="form-group">
		    {!! Form::label('Image') !!}
		    {!! Form::file('image') !!}
		  </div>

		<button type="submit" class="btn btn-default">Submit</button>

	{!! Form::close() !!}


</div>

@endsection