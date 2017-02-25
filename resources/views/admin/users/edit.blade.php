@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>
    @include('includes.form_errors')

    <div class="col-md-3">
        <img src="{{$user->photo ? $user->photo->file: '/images/PLACEHOLDER.JPG'}}" height="170" width="170" class="img-responsive img-circle">
    </div>

    <div class="col-md-9">
        {!! Form::model($user, ['method'=> 'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update', ['class'=>'btn btn-primary'])!!}
        </div>
        {!! Form::close() !!}
    </div>



@stop