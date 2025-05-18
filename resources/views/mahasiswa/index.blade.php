@extends('layouts.template')
@section('content')
    <section class="page-section portofolio" id="portfolio">
        <div class="container">
                <h1 class=>Daftar Mahasiswa</h1>
                <a href="{{route('mahasiswa.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
                @if (session('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $mhs)
                            <tr>
                            
                                <td>{{ $mhs->id }}</td>
                                <td>{{ $mhs->nim }}</td>
                                <td>{{ $mhs->nama }}</td>
                                <td>{{ $mhs->email }}</td>
                                <td>{{ $mhs->jurusan }}</td>
                                <td>
                                    <a href="{{route('mahasiswa.edit', $mhs->id)}}" class="btn btn-warning">Edit</a>
                                    <form action="{{route('mahasiswa.destroy', $mhs->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
    </section>
@endsection