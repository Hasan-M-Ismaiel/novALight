<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    // صفحة جميع المقالات
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('blog.index', compact('posts'));
    }

    // صفحة مقال واحد
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }
}
