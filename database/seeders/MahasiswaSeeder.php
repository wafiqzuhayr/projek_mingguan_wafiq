<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('mahasiswas')->insert([
            'nama' => "Wafiq Zuhayr",
            'nim' => 13242420026,
            'prodi' => "Teknologi Informasi",
            'email' => "wafiq.zuhayr@gmail.com",
            'nohp' => 628123456789,
        ]);
    }
}
