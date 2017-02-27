@extends('layouts.admin')

@section('content')
    @include('includes.form_errors')
    <h1>CREATE A POST</h1>

    {!! Form::open(['method'=> 'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', array(0=>'RIDES', 1=>'BIKES', 2=>'PLANES'), null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Description:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>4]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create', ['class'=>'btn btn-primary'])!!}
        </div>
    {!! Form::close() !!}
@stop