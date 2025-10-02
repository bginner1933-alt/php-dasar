<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->delete();

        $post = [
            ['title'=> 'belajar laravel', 'content'=> 'lorem ipsum'],
            ['title'=> 'tips belajar laravel', 'content'=> 'lorem ipsum'],
            ['title'=> 'jadwal latihan workout', 'content'=> 'lorem ipsum']
        ];
        DB::table('posts')->insert($post);
    }
}
