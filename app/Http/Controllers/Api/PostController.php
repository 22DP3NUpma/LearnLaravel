<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required',
            'description' => '',
            'likes' => 'required|integer'
        ]);

        $post = Post::create($validated);

        return response()->json($post);
    }
}
