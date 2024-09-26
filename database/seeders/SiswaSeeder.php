<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = [
            ['id'=>'001', 'nama'=>'Ronaldo' , 'kelas'=>'10 MIPA' , 'alamat'=>'Bandung' , 'ekstrakulikuler'=>'sepak bola'],
            ['id'=>'002', 'nama'=>'Jordan' , 'kelas'=>'10 MIPA' , 'alamat'=>'Garut' , 'ekstrakulikuler'=>'basket'],
            ['id'=>'003', 'nama'=>'Messi' , 'kelas'=>'10 IPS' , 'alamat'=>'Bandung' , 'ekstrakulikuler'=>'basket'],
            ['id'=>'004', 'nama'=>'Michele' , 'kelas'=>'10 BAHASA' , 'alamat'=>'Jakarta' , 'ekstrakulikuler'=>'taekwondo'],
          ];
          DB::table('siswa')->insert($siswa);
    }
}

