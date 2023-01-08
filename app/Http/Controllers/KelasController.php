<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.all', [
            "data_kelas" => Kelas::all()
        ]);
    }

    public function show(Kelas $kelas) {    
        return view('kelas.detail', [
            "kelas" => $kelas
        ]);
    }
}
