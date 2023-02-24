@extends ('dashboard.layouts.main')
@section('container')
    <h1 class="text-center">Detail Kelas</h1>
    <div class="card-body">
        <div class="form-group">
            <label for="" class="form-label"></label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $kelas->id }}" readonly
                placeholder="NIS">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Kode Kelas</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $kelas->kode }}" readonly
                placeholder="Nama">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $kelas->nama }}" readonly
                placeholder="alamat">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Daftar Siswa</label>
            @foreach ($kelas->siswa as $murid)
                <ul class="list-group">
                    <li class="list-group-item">{{ $murid->nama }}</li>
                </ul>
            @endforeach
        </div>



        <a type="button" class="btn btn-warning mt-5" href="/dashboard/kelas/">Back</a>
    </div>
@endsection
