@extends('layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->body}}</p>
            <footer class="blockquote-footer">Last updated {{$post->updated_at}}</footer>
            <p></p>
            <a href="/posts" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection