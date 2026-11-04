<?php

namespace App\Http\Controllers;

class ProdukController extends Controller
{
    // Langkah 3: daftar semua kopi
    public function index()
    {
        $semuaProduk = config('produk');
        return view('produk.index', compact('semuaProduk'));
    }

    // Langkah 3: detail satu kopi berdasarkan slug di URL
    public function show($slug)
    {

        // Langkah 4: kalau slug tidak ada di data, tampilkan halaman 404
        $produk = collect(config('produk'))->firstWhere('slug', $slug);
        if (! $produk) {
            abort(404);
        }


        return view('produk.show', compact('produk'));
    }
}
