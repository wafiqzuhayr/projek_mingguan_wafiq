@extends('layoutt.main')

@section('content')
    <h1>Edit Data Mahasiswa</h1>
    <div class="card">
        <div class="card-body bg-light">
            <form action="/editdata/{{$data ['id']}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name ="name" id="nama" value="{{ $data['nama']}}" placeholder="Nama Lengkap" class="form-control">
            <div class="mb-3">
                <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                <input type="number" name ="nim" id="nim" value="{{ $data['nim']}}" placeholder="NIMMU" class="form-control">
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" name ="prodi" id="prodi" value="{{ $data['prodi']}}" placeholder="Program Studi" class="form-control">
            </div>
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name ="email" id="email" value="{{ $data['email']}}" placeholder="Nama Lengkap" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">Nomor Handphone</label>
                <input type="number" name ="nohp" value="{{ $data['nohp']}}" id="nohp" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</div>

@endsection
