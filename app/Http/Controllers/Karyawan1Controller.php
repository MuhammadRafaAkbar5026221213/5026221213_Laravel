<?php

namespace App\Http\Controllers;

use App\Models\Karyawan1;
use Illuminate\Http\Request;

class Karyawan1Controller extends Controller
{
    // Menampilkan seluruh data karyawan
    public function index()
    {
        $karyawans = Karyawan1::all();  // Ambil semua data karyawan
        return view('indexkaryawan', compact('karyawans'));  // Tampilkan di view indexkaryawan.blade.php
    }

    // Menampilkan form untuk mengedit data karyawan
    public function edit($nip)
    {
        $karyawan = Karyawan1::find($nip);  // Mencari data berdasarkan NIP
        return view('editkaryawan', compact('karyawan'));  // Tampilkan di view editkaryawan.blade.php
    }

    // Menyimpan perubahan setelah edit data
    public function update(Request $request, $nip)
    {
        $request->validate([
            'Nama' => 'required|string|max:50',
            'Pangkat' => 'required|string|max:5',
            'Gaji' => 'required|integer',
        ]);

        $karyawan = Karyawan1::find($nip);
        $karyawan->Nama = $request->Nama;
        $karyawan->Pangkat = $request->Pangkat;
        $karyawan->Gaji = $request->Gaji;
        $karyawan->save();

        return redirect()->route('karyawan.index');  // Kembali ke halaman index
    }

    // Menampilkan detail data karyawan (view data)
    public function show($nip)
    {
        $karyawan = Karyawan1::find($nip);  // Mencari data berdasarkan NIP
        return view('showkaryawan', compact('karyawan'));  // Tampilkan di view showkaryawan.blade.php
    }

    // Hapus data karyawan
    public function destroy($nip)
    {
        $karyawan = Karyawan1::find($nip);
        $karyawan->delete();
        return redirect()->route('karyawan.index');  // Kembali ke halaman index
    }
}
