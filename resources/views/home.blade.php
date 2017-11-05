@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>

            <div class="col-lg-4">
                {{ Html::linkaction('UserController@edit', 'Edit User', ['class' => 'btn btn-default btn-success'])}}
            </div>

        </div>
    </div>
</div>
@endsection
