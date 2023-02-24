<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use Termwind\Components\Dd;

class DashboardSiswaController extends Controller
{

    public function index() {

        return view('dashboard.siswa', [
           'data_siswa' => Siswa::filter(request(['search', 'kelas_id']))->paginate(5),
              'data_kelas' => Kelas::all()
        ]);
    }

     public function show(Siswa $siswa) {    
        return view('siswa.detail', [
            "siswa" => $siswa
        ]);
    }

    public function create()
    {
        return view('siswa.create',[
            "kelas" => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kelas_id' => 'required',
            'nis' => 'required|unique:siswas',
            'tanggal_lahir' => 'required',
            'nama' => 'required|max:225',
            'alamat' => 'required', 
        ]);

        Siswa::create($validateData);
        return redirect('/dashboard/siswa')->with('success', 'Data siswa berhasil ditambahkan !');
    }

    public function destroy(Siswa $siswa) {

        Siswa::destroy($siswa->id);
        return redirect('/dashboard/siswa')->with('success', 'Data Berhasil Dihapus');
    }

    public function edit(Siswa $siswa) {
        return view('siswa.edit', [
            'kelas' => Kelas::all(),
            "siswa" => $siswa
        ]);
    }

    public function update(Request $request, Siswa $siswa) {
        $rules = [
            'nama' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'kelas_id' => 'required'
        ];

        $validateData = $request->validate($rules);
        Siswa::where('id', $siswa->id)
                    ->update($validateData);
        return redirect('/dashboard/siswa')->with('success', 'Data telah diubah');
    }
}
