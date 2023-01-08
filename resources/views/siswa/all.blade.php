@extends('layouts.main')
@section('container')
    <h1 class="text-center">Halaman Siswa</h1>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role alert>
            {{ session ('success') }}
        </div>
    @endif
    <br>
    <table>
        <table class="table table-striped text-center">
            <a class="btn btn-primary mb-2" href="create" role="button">Tambah Data</a>
            <thead>
                <tr class="table-dark">
                    <th scope="col">ID</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Nama</th>
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
                        <td>{{ $siswa->alamat }}</td>
                        <td>{{ $siswa->kelas->nama }}</td>
                        <td>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $siswa['id'] ?>"
                                class="btn btn-info">Detail</a>
                            <a type="button" href="detail/{{ $siswa->id }}" class="btn btn-warning">Detail
                                Page</a>
                            <a class="btn btn-primary" href="edit/{{ $siswa->id }}">Edit</a>
                            <form action="/siswa/delete/{{ $siswa->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm("Apakah ada yakin ?")"">Hapus</button>
                            </form>
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
                                        <div class="form-group">
                                            <label for="" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="nama"
                                                value="<?= $siswa['nama'] ?>" readonly placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Tanggal Lahir</label>
                                            <input type="text" class="form-control" name="alamat" id="alamat"
                                                value="<?= $siswa['alamat'] ?>" readonly placeholder="alamat">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <a type="button" class="btn btn-warning"
                                            href="ubah.php?id=<?= $siswa['id'] ?>">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </tbody>
        </table>
    </table>
@endsection
