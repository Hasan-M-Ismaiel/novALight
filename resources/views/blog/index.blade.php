@extends('layouts.app')

@section('title', 'Blog')
@section('content')

<div class="container py-5">
    <h1 class="mb-4">Blog</h1>

    @if($posts->count() > 0)
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">

                        @if($post->image)
                            <img src="{{ asset($post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                        @endif

                        <div class="card-body">
                            <h3 class="card-title">{{ $post->title }}</h3>
                            <p class="text-muted">{{ $post->reading_time }} min read</p>
                            <p>{{ $post->excerpt }}</p>

                            <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-primary">
                                Read More
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-5">
            <h3 class="mb-3">Coming Soon<span class="dots"></span></h3>
            <p>Writing in Progress…</p>
        </div>
    @endif
</div>

@endsection

@section('scripts')
<style>
/* CSS للنقاط المتحركة */
.dots::after {
    content: '';
    display: inline-block;
    width: 1ch;
    text-align: left;
    animation: dots 1s steps(3, end) infinite;
}

@keyframes dots {
    0%, 20% {
        content: '';
    }
    40% {
        content: '.';
    }
    60% {
        content: '..';
    }
    80%, 100% {
        content: '...';
    }
}
</style>
@endsection
