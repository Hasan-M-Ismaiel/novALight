@extends('layouts.app')

@section('title', $post->title)
@section('content')

<div class="container py-5">

    <h1 class="mb-3">{{ $post->title }}</h1>
    <p class="text-muted">Published: {{ $post->created_at->format('M d, Y') }} — {{ $post->reading_time }} min read</p>

    @if($post->image)
        <img src="{{ asset($post->image) }}" 
         class="img-fluid mb-4" 
         alt="{{ $post->title }}"
         style="max-height: 400px; object-fit: cover; width: 100%;">
    @endif

    <article class="content">
        {!! $post->content !!}
    </article>

</div>

@endsection
