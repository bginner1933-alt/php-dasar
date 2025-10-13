<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController; // Controlle harus di import / di panggil
use App\Http\Controllers\PostController;
use App\Http\Controllers\BiodataController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('test-model',function(){
    // Menampilkan semua data dari mdel post
    $data = App\Models\Post::all();
    return $data;
});

Route::get('create-data',function(){
    // Membuat data baru melalui model
    $data = App\Models\Post::create([
        'title'=>'Belajar PHP',
        'content'=>'Lorem Ipsum'
    ]);
    return $data;
});

Route::get('show-data/{id}', function ($id) {
    // Menampilkan data berdasarkan paramter 'id'
    $data = App\Models\Post::find($id);
    return $data;
});

Route::get('edit-data/{id}', function($id) {
    // Mengupdate data berdasarkan id
    $data = App\Models\Post::find($id);
    $data->title = "Membangun Project Dengan Laravel";
    $data->save();
    return $data;
});

Route::get('delete-data/{id}', function ($id){
    // Menghapus data berdasarkan parameter id
    $data = App\Models|Post::fing($id);
    $data->delete();
    // Di kembalikan (alihkan) ke halaman test model
    return redirect('test-model');
});

Route::get('search/{cari}', function($query){
    $data = App\Models\Post::where('title', 'like', '%' . $query . '%')->get();
    return $data;
});

// Pemanggil url menggunakan controller

Route::get('greetings',[MyController::class, 'hello']);
Route::get('student',[MyController::class, 'siswa']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Post
Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::post('post', [PostController::class, 'store'])->name('post.store');
// Edit data post
Route::get('post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/{id}', [PostController::class, 'update'])->name('post.update');

// Show data
Route::get('post/{id}/edit', [PostController::class, 'show'])->name('post.show');

Route::resource('produk', App\Http\Controllers\ProdukController::class)->middleware('auth');


Route::resource('biodata', BiodataController::class);



// Hapus data
Route::delete('post/{id}', [PostController::class, 'destroy'])->name('post.delete');
