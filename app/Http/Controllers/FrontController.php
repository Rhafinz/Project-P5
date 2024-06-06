<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Jurusan;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua data guru dari database menggunakan model Guru
        $guru = Guru::all();
        $jurusan = Jurusan::all();

        // Mengirimkan variabel $guru ke view
        return view('view', compact('guru', 'jurusan'));
    }
}
