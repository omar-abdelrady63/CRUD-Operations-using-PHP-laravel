@extends('layout')

@section('title', 'View Post')

@section('content')
    <h2>Post Details</h2>

    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ $post->title }}</strong>
        </div>
        <div class="card-body">
            <p><strong>Body:</strong></p>
            <p>{{ $post->body }}</p>

            <p><strong>Checked:</strong> {{ $post->checked ? 'Yes' : 'No' }}</p>
            <p><strong>Author:</strong> {{ $post->user->name ?? 'Unknown' }}</p>
            <p><strong>Category:</strong> {{ $post->category->name ?? 'Uncategorized' }}</p>
        </div>
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
@endsection
