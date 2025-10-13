<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';

    protected $fillable = [
        'nama', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'alamat', 'foto', 'tinggi_badan', 'berat_badan'
    ];
}
