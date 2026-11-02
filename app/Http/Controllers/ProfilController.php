<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Mahirul Ilman Hamdi";
        $programStudi = "Sistem Informasi";

        $keahlian = [
            'Laravel Framework',
            'Desain UI/UX',
            'Database MySQL',
            'Analisis Data'
        ];

        return view('profil', [
            'nama' => $nama,
            'programStudi' => $programStudi,
            'keahlian' => $keahlian
        ]);
    }
}
