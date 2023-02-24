@extends('dashboard.layouts.main')
@section('container')
    <h1 align="center">Tambah Data Siswa</h1>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/update/ {{ $siswa->id }}">
            @csrf
            <div class="mb-3">
                <label for="">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis" required
                    value="{{ old('nis', $siswa->nis) }}" disabled>
            </div>
            <div class="mb-3">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama"
                    value="{{ old('nama', $siswa->nama) }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                    value={{ old('tanggal_lahir', $siswa->tanggal_lahir) }}>
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat"
                    value="{{ old('alamat', $siswa->alamat) }}">
            </div>
            <div class="mb-3">
                <label for="kelas" class="from-label">Kelas</label>
                <select class="form-select" name="kelas_id" id="">
                    @foreach ($kelas as $class)
                        @if (old('kelas_id', $siswa->kelas_id == $class->id))
                            <option name="kelas_id" value="{{ $class->id }}" selected>{{ $class->nama }}</option>
                        @else
                            <option name="kelas_id" value="{{ $class->id }}">{{ $class->nama }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <a type="button" href="/dashboard/siswa" class="btn btn-outline-dark">Back</a>
        </form>
    </div>
@endsection
