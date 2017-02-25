@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.<br><br>

                    <div class="col-md-12">
                        <a href="{{url('/admin/users')}}" class="btn btn-primary">USERS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
