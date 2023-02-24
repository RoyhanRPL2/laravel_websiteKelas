@extends('layouts.main')
@section('container')
    <link rel="stylesheet" href="https://kit.fontawesome.com/5e00427037.css" crossorigin="anonymous">
    <h1 class="text-center">Halaman Siswa</h1>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role alert>
            {{ session('success') }}
        </div>
    @endif
    <br>
    <table class="table table-striped text-center">
        <div class="row">
            <form action="/siswa/all">
                <div class="col-lg-3">
                    <div class="input-group mb-3">
                        <select class="form-select" name="kelas_id" id="kelas_id" aria-label="Default select example">
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
                <div class="col-lg-7">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Data Siswa" name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>
            <div class="col-lg-2">
                <a class="btn btn-primary mb-2" href="/siswa/all" role="button"><i class="fa-solid fa-arrows-rotate"></i></a>
            </div>
        </div>
        @if ( $data_siswa->count() )
        <thead>
            <tr class="table-dark">
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
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $siswa['id'] ?>"
                            class="btn btn-info">Detail</a>
                    </td>
                </tr>
                <div class="modal fade" id="modalDetail<?= $siswa['id'] ?>" tabindex="-1"
                    aria-labelledby="modalDetailLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalDetailLabel">Detail Data Siswa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="" class="form-label">NIS</label>
                                        <input type="text" class="form-control" name="nis" id="nis"
                                            value="<?= $siswa['nis'] ?>" readonly placeholder="NIS">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            value="<?= $siswa['nama'] ?>" readonly placeholder="Nama">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="" class="form-label">Tanggal Lahir</label>
                                        <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                                            value="<?= $siswa['tanggal_lahir'] ?>" readonly placeholder="alamat">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="" class="form-label">Kelas</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat"
                                            value="<?= $siswa->kelas->nama ?>" readonly placeholder="alamat">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </tbody>
    </table>
    @else
        <div class="alert alert-danger col-lg-12" role alert>
            Data Siswa Tidak Ditemukan
        </div>
    @endif
    {{ $data_siswa->links('pagination::bootstrap-5') }}
@endsection
