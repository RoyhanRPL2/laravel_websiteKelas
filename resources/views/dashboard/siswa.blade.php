@extends('dashboard.layouts.main')
@section('container')
    <h1 class="text-center">Halaman Siswa</h1>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role alert>
            {{ session('success') }}
        </div>
    @endif
    <br>
    <table>
        <table class="table table-striped text-center">
            <div class="row">
                <div class="col-lg-2">
                    <a class="btn btn-primary mb-2" href="create" role="button">Tambah Data</a>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <form action="/dashboard/siswa">
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <select class="form-select" name="kelas_id" id="kelas_id"
                                        aria-label="Default select example">
                                        <option selected value="">Pilih Kelas</option>
                                        @foreach ($data_kelas as $kelas)
                                            @if (request('kelas_id') == $kelas->id)
                                                <option value="{{ $kelas->id }}" selected>{{ $kelas->nama }}</option>
                                            @else
                                                <option value="{{ $kelas->id }}">{{ $kelas->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari Data Siswa" name="search"
                                        value="{{ request('search') }}">
                                    <button class="btn btn-outline-primary" type="submit"
                                        id="button-addon2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2">
                            <a class="btn btn-primary mb-2" href="/dashboard/siswa" role="button"><i class="fa-solid fa-arrows-rotate"></i></a>
                </div>
            </div>
            @if ($data_siswa->count())
                <thead>
                    <tr class="table-dark" class="center">
                        <th scope="col">ID</th>
                        <th scope="col">Nis</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_siswa as $siswa)
                        <tr class="text-center">
                            <td>{{ $siswa->id }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->tanggal_lahir }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->kelas->nama }}</td>
                            <td>
                                <a type="button" href="/dashboard/detail/{{ $siswa->id }}"
                                    class="btn btn-warning">Detail
                                    Page</a>
                                <a class="btn btn-primary" href="edit/{{ $siswa->id }}">Edit</a>
                                <form action="/dashboard/delete/{{ $siswa->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </table>
@else
    <div class="alert alert-danger col-lg-12" role alert>
        Data Siswa Tidak Ditemukan
    </div>
    @endif

    {{ $data_siswa->links('pagination::bootstrap-5') }}
@endsection
