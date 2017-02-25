@extends('layouts.admin')

@section('content')
    <h1>System Users</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>PHOTO</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ROLE</th>
            <th>STATUS</th>
            <th>CREATED</th>
            <th>UPDATED</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img src="{{$user->photo ? $user->photo->file : '/images/PLACEHOLDER.JPG'}}" height="62" width="62" class="img-responsive img-circle"></td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'NO ROLE'}}</td>
                    <td>{{$user->is_active == '1' ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    <a href="{{url('/')}}" class="btn btn-primary">HOME</a>

@stop