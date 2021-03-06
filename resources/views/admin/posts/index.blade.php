@extends('layouts.admin')

@section('content')
    <h1>POSTS</h1>


        <table class="table table-striped">
          <thead>
              <tr>
                <th>Post ID</th>
                <th>User</th>
                <th>Category</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Body</th>
                <th>Create</th>
                <th>Updated</th>
              </tr>
          </thead>
            <tbody>
            @foreach($posts->all() as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category_id}}</td>
                <td><img src="{{$post->photo->file}}" height="62" width="62" class="img img-rounded"></td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>



    @stop