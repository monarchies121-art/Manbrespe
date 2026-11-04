@extends('layouts.app')
@section('konten')
    <section class="s-tetes-sec s-tetes-detail">
        <div class="s-wrap s-tetes-wrap">
            <p class="s-tetes-label s-tetes-crumb">
                <a href="{{ route('produk.index') }}">Kopi</a>
                <span>{{ $produk['kategori'] }}</span>
            </p>
            <div class="s-tetes-detail-in">
                <div class="s-tetes-detail-fig">
                    <div class="s-img s-has-img s-tetes-zoom" style="background-image: url('{{ $produk['gambar'] }}');"></div>
                </div>
                <div class="s-tetes-detail-copy">
                    @if ($produk['label'])
                        <p class='s-tetes-label'>{{ $produk['label'] }}
                    @endif
                    <h1 class="s-h1 s-tetes-h1">{{ $produk['nama'] }}</h1>
                    <p class="s-tetes-detail-price">Rp{{ number_format($produk['harga'], 0, ',', '.') }}</p>
                    <p class="s-tetes-text">{{ $produk['deskripsi'] }}</p>
                    <ul class="s-tetes-list">
                        <li><span>Asal biji</span><span>{{ $produk['asal'] }}</span></li>
                        <li><span>Proses</span><span>{{ $produk['proses'] }}</span></li>
                        <li><span>Catatan rasa</span><span>{{ $produk['catatan'] }}</span></li>
                        <li><span>Ukuran</span><span>{{ $produk['ukuran'] }}</span></li>
                    </ul>
                    @if ($produk['stok'] < 1)
                        <p class="s-tetes-text">Maaf, {{ $produk['nama'] }} ini sedang habis.</p>
                    @else
                        <a class="s-btn s-tetes-btn" href="#">Pesan lewat WhatsApp</a>
                    @endif
                    <a class="s-tetes-under" href="{{ route('produk.index') }}">Kembali ke semua kopi</a>
                </div>
            </div>
        </div>
    </section>
@endsection
