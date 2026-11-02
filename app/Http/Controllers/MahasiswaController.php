<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Mahirul Ilman Hamdi',
            'npm' => '524031022',
            'jurusan' => 'Sistem Informasi',
            'angkatan' => '2024',
            'status' => 'Mahasiswa Aktif'
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}
// TUGAS 2 ELERNING