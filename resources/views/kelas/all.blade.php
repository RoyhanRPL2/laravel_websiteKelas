@extends('layouts.main')
@section('container')
    <h1 class="text-center">Ini halaman kelas</h1>
    <br>
    <table class="table table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_kelas as $kelas)
                <tr>
                    <th>{{ $kelas->id }}</th>
                    <td>{{ $kelas->kode }}</td>
                    <td>{{ $kelas->nama }}</td>
                    <td>
                        <a type="button" href="detail/{{ $kelas->id }}" class="btn btn-warning">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
