@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>Category: {{ $post->category->name }}</p>
            <p>{{ $post->content }}</p>
        </div>
        <hr>
    @endforeach
@endsection
