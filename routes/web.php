<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController; // controlle harus di import / di panggil
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test-model',function(){
    // menampilkan semua data dari mdel post
    $data = App\Models\Post::all();
    return $data;
});

Route::get('create-data',function(){
    //membuat data baru melalui model
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


// post
Route::get('post', [PostController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
