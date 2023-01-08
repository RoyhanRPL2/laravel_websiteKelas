@extends('layouts.main')
@section('container')
    <h1 align="center">Tambah Data Siswa</h1>
    <div class="col-lg-8">
        <form method="POST" action="/siswa/add">
            @csrf
            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" value={{ old('nis') }}>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value={{ old('nama') }}>
            </div>
            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <select name="kelas_id" id="" class="form-select">
                    @foreach ($kelas as $class)
                        <option name="kelas_id" value="{{ $class->id }}">{{ $class->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value={{ old('alamat') }}>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
