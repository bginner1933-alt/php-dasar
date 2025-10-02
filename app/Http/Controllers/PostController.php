<?php

namespace App\Http\Controllers;


use App\Models\Post;
// Import model post

class PostController extends Controller
{
    // Daftar post
    public function index()
    {
        // Menampilkan semua data dari model post
        $post = Post::all();
        return view('post.index', compact('post'));
    }
}

//use App\Http\Controllers\PostController;
// post
//Route::get('post', [PostController::class, 'index'])
