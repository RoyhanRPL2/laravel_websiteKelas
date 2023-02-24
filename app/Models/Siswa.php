<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['kelas_id','nis', 'tanggal_lahir', 'nama', 'alamat'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function scopeFilter($query, array $filters) {
        
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query->where(fn ($query) =>
                $query->where('nis', 'like', '%' . $search . '%')
                    ->orWhere('nama', 'like', '%' . $search . '%')
                    ->orWhere('alamat', 'like', '%' . $search . '%')
                    ->orWhere('tanggal_lahir', 'like', '%' . $search  . '%')
            )
        );

        $query->when($filters['kelas_id'] ?? false, function($query, $kelas_id) {
            return $query->where('kelas_id', $kelas_id);
        });
    }
}
