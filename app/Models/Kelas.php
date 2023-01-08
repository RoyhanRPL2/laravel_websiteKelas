<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama'];

    public function Siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
