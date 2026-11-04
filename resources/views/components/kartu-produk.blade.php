@props({'produk', 'urutan' => 0})
<a href="{{ route('produk.show', $produk['slug']) }}" class="s-tetes-item" data-fx="" style="--i: {{ $urutan }};">
    <div class="s-tetes-tile">
        <div class="s-img s-tone-0 s-has-img s-tetes-tile-img rk-i4"
            style="background-image: url('{{ $produk['gambar'] }}');">
        </div>
        @if ($produk['stok'] < 1)
            <span class="s-tetes-tag">Habis</span>
        @elseif ($produk['label'])
            <span class="s-tetes-tag">{{ $produk['label'] }}</span>
        @endif
    </div>
    <div class="s-tetes-item-row">
        <h3>{{ $produk['nama'] }}</h3>
        <span class="s-tetes-price">Rp{{ $produk['harga'] / 1000 }}rb</span>
    </div>
    <p>{{ $produk['deskripsi'] }}</p>
</a>
</div>
