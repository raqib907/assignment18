@extends('layouts.app')

@section('content')
    <h1>Latest Posts by Category</h1>

    @foreach($categories as $category)
        <h2>{{ $category->name }}</h2>

        @if($category->latestPost)
            <div>
                <h3>{{ $category->latestPost->title }}</h3>
                <p>{{ $category->latestPost->content }}</p>
            </div>
        @else
            <p>No posts found for this category.</p>
        @endif

        <hr>
    @endforeach
@endsection
