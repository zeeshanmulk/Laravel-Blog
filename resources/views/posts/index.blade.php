@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach ($posts as $post)
            <div class="card card-body bg-light" style="width: 20rem;">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                <small>This was written on {{$post->created_at}}</small>

            </div>
        @endforeach
    @else
        <p>No posts found!</p>
    @endif
@endsection