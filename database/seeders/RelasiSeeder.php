<?php
// database/seeders/RelasiSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;

class RelasiSeeder extends Seeder
{
    public function run()
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Rivan Gunawan',
            'nim' => '123456',
        ]);

        Wali::create([  
            'nama' => 'Bu Dewi',
            'id_mahasiswa' => $mahasiswa->id
        ]);
    }
}
