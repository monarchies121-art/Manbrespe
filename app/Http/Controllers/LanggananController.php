<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanggananController extends Controller
{
    // Langkah 5: menerima email dari form di bagian bawah halaman
    public function store(Request $request)
    {
        $email = $request->input('email');

        // Cek sederhana seperti di Minggu 8 (PHP native)
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return back()
                ->withInput()
                ->with('status', 'Email belum benar. Coba periksa lagi, ya.')
                ->withFragment('footer');
        }

        // Belum disimpan. Di Minggu 11 email ini masuk ke database.
        return back()
            ->with('status', 'Terima kasih! Kabar berikutnya dikirim ke '.$email.'.')
            ->withFragment('footer');
    }
}
