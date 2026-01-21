@extends('layoutt.main')

@section('content')
    <h1>Tambah Data Mahasiswa</h1>
    <div class="col-8">
    <div class="card">
        <div class="card-body bg-white p-5 rounded shadow-sm">
            <form action="/insertdata" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" id="nama" placeholder="Masukan Nama Lengkap" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                    <input type="number" name="nim" id="nim" placeholder="Masukan NIM" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}">
                    @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi</label>
                    <input type="text" name="prodi" id="prodi" placeholder="Masukan Program Studi" class="form-control @error('prodi') is-invalid @enderror" value="{{ old('prodi') }}">
                    @error('prodi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Masukan Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nohp" class="form-label">Nomor Handphone</label>
                    <input type="number" name="nohp" id="nohp" placeholder="Masukan No HP" class="form-control @error('nohp') is-invalid @enderror" value="{{ old('nohp') }}">
                    @error('nohp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary px-4">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
