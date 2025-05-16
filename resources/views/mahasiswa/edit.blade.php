@extends('layouts.template')
@section('content')
    <section class="page-section portofolio" id="tambah">
        <div class="container">
            <h1 class>Edit Data Mahasiswa</h1>

            <form action="{{route('mahasiswa.update', $mhs->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="{{ $mhs->nim }}" required>
                </div>
                 <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $mhs->nama }}" required>
                </div>
                 <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $mhs->email }}" required>
                </div>
                 <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $mhs->jurusan }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
@endsection