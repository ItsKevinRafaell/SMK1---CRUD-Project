<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert([
            'bulan' => 'Agustus',
            'nama' => 'Masa Orientasi Siswa',
            'tgl' => '17'
          ]);
  
          DB::table('jadwal')->insert([
              'bulan' => 'Agustus',
              'nama' => 'Upacara Kemerdekaan',
              'tgl' => '17'
          ]);

          DB::table('jadwal')->insert([
            'bulan' => 'September',
            'nama' => 'Ujian Menengah Semester',
            'tgl' => '12'
        ]);
    }
}
