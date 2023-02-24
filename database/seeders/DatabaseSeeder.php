<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Siswa::factory(20)->create();

        Kelas::create([
            'kode' => '1001',
            'nama' => '10 PPLG 1'
        ]);

        Kelas::create([
            'kode' => '1002',
            'nama' => '10 PPLG 2'
        ]);
        
        Kelas::create([
            'kode' => '1101',
            'nama' => '11 PPLG 1'
        ]);

        Kelas::create([
            'kode' => '1102',
            'nama' => '11 PPLG 2'
        ]);
    }
}
