<?php

namespace App\Models;
use App\Models\Dosen;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nama', 'nim'];

    public function wali()
    {
        return $this->hasOne(Wali::class, 'id_mahasiswa');
    }

    // app/Models/Mahasiswa.php
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }
    // app/Models/Mahasiswa.php
    public function hobis()
    {
        return $this->belongsToMany(Hobi::class, 'mahasiswa_hobi', 'id_mahasiswa', 'id_hobi');
    }
}
