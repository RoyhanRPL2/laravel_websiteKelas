@extends ('dashboard.layouts.main')

@section('container')
    <h1 class="text-center">Detail Data Siswa</h1>
    <div class="card-body">
        <div class="form-group">
            <label for="" class="form-label">NIS</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $siswa->nis }}" readonly
                placeholder="NIS">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $siswa->nama }}" readonly
                placeholder="Nama">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Kelas</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $siswa->kelas->nama }}" readonly
                placeholder="Nama">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $siswa->alamat }}" readonly
                placeholder="alamat">
        </div>

        <a type="button" class="btn btn-warning mt-5" href="/dashboard/siswa">Back</a>
    </div>
@endsection
