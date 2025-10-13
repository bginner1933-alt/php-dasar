<?php

namespace App\Http\Controllers;

// Import Package Request
use Illuminate\Http\Request;
// Import Model Post
use App\Models\Post;


class PostController extends Controller
{

    // Beri middleware 'auth' untuk mengecek sudah login atau belum
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Daftar post
    public function index()
    {
        // Menampilkan semua data dari model post
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    // Menampilkan halaman form create
    public function create()
        {
            return view('post.create');
        }

        // Menambahkan data ke storage(database)
    public function store(Request $request)
        {
            // Membuat data baru untuk table 'posts'
            // Melalui model post
            $post = new Post;
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();
            return redirect()->route('post.index');
        }

        public function show($id)
        {
            // Mencari data post berdasarkan parameter 'id'
            $post = Post::findOrFail($id);
            return view('post.show', compact('post'));
        }

        // Menampilkan formulir edit data post
        public function edit($id)
        {
            // Mencari data post berdasarkan parameter 'id'
            $post = Post::findOrFail($id);
            return view('post.edit', compact('post'));
        }

        public function update(Request $request, $id)
        {
            // Mencari data post berdasarkan parameter 'id'
            $post  = Post::findOrFail($id);
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save(); //Disimpan ke db
            // Di alihkan ke halaman post melalui route post.index
            return redict()->route('post.index');
        }

        public function destroy($id)
        {
            // Mencari data post berdasarkan parameter 'id'
            $post = Post::findOrFail($id);
            $post->delete(); // Setelah data ditemukan kemudian di delete
            return redirect()->route('post.index');
        }
}

//use App\Http\Controllers\PostController;
// post
//Route::get('post', [PostController::class, 'index'])
