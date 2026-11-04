<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // Langkah 2: satu method untuk satu halaman
    public function homepage()
    {
        $semuaProduk = config('produk');
        return view('homepage', compact('semuaProduk'));
    }

    public function cerita()
    {
        return view('cerita');
    }

    public function kedai()
    {
        return view('kedai');
    }
}
