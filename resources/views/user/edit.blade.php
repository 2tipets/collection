@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            {!! Form::open() !!}


            {!! Form::label('username') !!}
            {!! Form::text('username', $user->name, ['class' => 'form-control']) !!}

            {!! Form::label('country') !!}
            {!! Form::select('country', ['Select your country'], 0, ['class' => 'form-control']) !!}

            {!! Form::label('description') !!}
            {!! Form::textarea('description', $user->description, ['class' => 'form-control']) !!}

            {!! Form::close() !!}


        </div>
    </div>
</div>
@endsection
