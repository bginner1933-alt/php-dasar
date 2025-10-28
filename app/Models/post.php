<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //secara otomatis model ini menganggap
    //tabel yang digunakan adalah table 'posts'
    
    //table yang digunakan untuk model ini adalah table 'post'
    //protected $table = 'post';

    //apa saja yang boleh di isi
    public $fillable = ['title','content'];

    //apa saja yang boleh ditampilkan
    public $visible  = ['id','title','content'];

    //mengisi tanggal kapan dibuat dan kapan di update secara otomatis
    public $timetamps = true;
}