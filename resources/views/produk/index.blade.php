@extends('layouts.app')
@section('konten')
    <section class="s-tetes-sec s-tetes-pagehead">
        <div class="s-wrap s-tetes-wrap">
            <p class="s-tetes-label"><b>Kopi Lereng</b><span>Katalog</span></p>
            <h1 class="s-h1 s-tetes-h1">Semua kopi dan biji</h1>
            <p class="s-tetes-text">Minuman di bar kedai dan biji sangrai yang bisa dikirim ke rumah. Klik salah satu untuk
                melihat detailnya.</p>
        </div>
    </section>

    <section class="s-tetes-sec s-tetes-menu s-tetes-katalog">
        <div class="s-wrap s-tetes-wrap">
            <div class="s-tetes-items">
                @foreach ($semuaProduk as $produk)
                    <a class="s-tetes-item" href="{{ route('produk.show', $produk['slug']) }}" style="--i: 0;">
                        <div class="s-tetes-tile">
                            <div class="s-img s-has-img s-tetes-tile-img"
                                style="background-image: url('{{ $produk['gambar'] }}');">
                            </div>
                            <span class="s-tetes-tag"></span>
                        </div>
                        <div class="s-tetes-item-row">
                            <h3>{{ $produk['nama'] }}</h3>
                            <span class="s-tetes-price">{{ $produk['harga'] }}</span>
                        </div>
                        <p>{{ $produk['deskripsi'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
