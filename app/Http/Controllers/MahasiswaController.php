<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'jurusan' => 'required',
        ]);

        mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $mhs = mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mhs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'jurusan' => 'required',
        ]);

        $update = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];
        Mahasiswa::where('id', $id)->update($update);
        return redirect()->route('mahasiswa')->with('success', 'Data Mahasiswa Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $mhs = mahasiswa::find($id);
        $mhs->delete();
        return redirect()->route('mahasiswa')->with('success', 'Data Mahasiswa Berhasil Dihapus');
    }
}
