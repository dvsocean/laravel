@extends('layouts.admin')

@section('content')
    <h1>POSTS</h1>

    @foreach($posts->all() as $post)
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
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->photo_id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
              </tr>
          </tbody>
        </table>

    @endforeach

    @stop