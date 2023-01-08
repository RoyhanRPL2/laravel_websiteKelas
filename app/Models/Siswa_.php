<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa 
{
    private static $siswa = [
        [
            'id' => 1,
            'nis' => 04477,
            'nama' => 'Royhan',
            'alamat' => 'jl.Mallengkeri',
        ],
        [
            'id' => 2,
            'nis' => 04476,
            'nama' => 'najib',
            'alamat' => 'kudus',
        ],
        [
            'id' => 3,
            'nis' => 34273,
            'nama' => 'ilham', // 
            'alamat' => 'kudus',
        ],
        [
            'id' => 4,
            'nis' => 04465,
            'nama' => 'haikal',
            'alamat' => 'kudus',
        ],
        [
            'id' => 5,
            'nis' => 044257,
            'nama' => 'nouvo',
            'alamat' => 'tuban',
        ]
        
    ];

    public static function all() {
        return collect(self::$siswa);
    }

    public static function find($nis) {
        $data_siswa = static::all();
        return $data_siswa->firstWhere('nis', $nis);
    }
}
