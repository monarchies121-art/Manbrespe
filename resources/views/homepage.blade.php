@extends('layouts.app')
@section('konten')
    <!-- Pembuka -->
    <section class="s-tetes-hero" data-gerak="" id="hero">
        <div class="s-tetes-reel">
            <div class="s-img s-tone-0 s-has-img s-tetes-reel-img rk-i1"
                style="--i: 0; background-image: url(&quot;https://images.unsplash.com/photo-1504469089401-14f795f6ddee?auto=format&amp;fit=crop&amp;w=1800&amp;q=70&quot;);">
            </div>
            <div class="s-img s-tone-1 s-has-img s-tetes-reel-img rk-i2"
                style="--i: 1; background-image: url(&quot;https://images.unsplash.com/photo-1545665206-b3e63670666e?auto=format&amp;fit=crop&amp;w=1800&amp;q=70&quot;);">
            </div>
            <div class="s-img s-tone-2 s-has-img s-tetes-reel-img rk-i3"
                style="--i: 2; background-image: url(&quot;https://images.unsplash.com/photo-1511537190424-bbbab87ac5eb?auto=format&amp;fit=crop&amp;w=1800&amp;q=70&quot;);">
            </div>
        </div>
        <div class="s-wrap s-tetes-wrap s-tetes-hero-in">
            <div class="s-tetes-hero-copy">
                <h1 class="s-h1 s-tetes-h1">Disangrai Senin dan Kamis, diseduh setiap hari</h1>
                <p class="s-tetes-text">Biji dari petani Flores, Kerinci, dan Gayo kami sangrai sendiri dalam batch
                    12 kilo, lalu kami seduh di dua kedai dan kirim ke rumah Anda.</p><a class="s-btn s-tetes-btn"
                    href="{{ route('produk.index') }}">Lihat kopi dan harga</a>
            </div>
            <div class="s-tetes-hero-side">
                <p class="s-tetes-count" aria-hidden="true"><span style="--i: 0;"><i class="s-tetes-drop"
                            aria-hidden="true"></i>01</span><span style="--i: 1;"><i class="s-tetes-drop"
                            aria-hidden="true"></i>02</span><span style="--i: 2;"><i class="s-tetes-drop"
                            aria-hidden="true"></i>03</span></p>
                <p class="s-tetes-hero-note">Biji dikirim paling lambat tiga hari setelah disangrai.</p>
            </div>
        </div>
    </section>

    <!-- Menu kopi -->
    <section class="s-tetes-sec s-tetes-menu" id="menu">
        <div class="s-wrap s-tetes-wrap">
            <h2 class="s-h2 s-tetes-h2">Sedang kami sangrai dan seduh</h2>
            <div class="s-tetes-items">
                @forelse ($semuaProduk as $produk)
                    <x-kartu-produk :produk="$produk" :urutan="$loop->index" />
                @empty
                    <p>Tidak ada produk tersedia saat ini.</p>
                @endforelse
                {{-- Langkah 4 (slide 45-46): enam kartu di bawah ini diganti satu @foreach --}}
                <a href="{{ route('produk.show', 'flat-white') }}" class="s-tetes-item" data-fx="" style="--i: 0;">
                    <div class="s-tetes-tile">
                        <div class="s-img s-tone-0 s-has-img s-tetes-tile-img rk-i4"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1587982704600-e5f79d652fe5?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                        </div>
                        <span class="s-tetes-tag"></span>
                    </div>
                    <div class="s-tetes-item-row">
                        <h3>Flat white</h3>
                        <span class="s-tetes-price">Rp38rb</span>
                    </div>
                    <p>Espresso Lereng Blend dan susu segar yang dikukus tipis.</p>
                </a>
                {{-- akhir kartu --}}
                <div class="s-tetes-items-side" data-fx="">
                    <p class="s-tetes-text">Biji 200 gram dikirim utuh atau digiling sesuai alat seduh Anda.
                        Pesanan sebelum Rabu pukul 20.00 ikut sangrai hari Kamis.</p><a
                        class="s-btn s-btn-ghost s-tetes-btn-line" href="#">Pesan biji lewat WhatsApp</a>
                </div>
            </div>
            <h2 class="s-h2 s-tetes-h2 s-tetes-menu-h2">Menu di bar kedai</h2>
            <div class="s-tetes-groups">
                <div class="s-tetes-group" data-fx="" style="--i: 0;">
                    <div class="s-tetes-group-fig">
                        <div class="s-img s-tone-1 s-has-img s-tetes-group-img rk-i10"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1610889556528-9a770e32642f?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                        </div>
                    </div>
                    <h3>Espresso &amp; susu</h3>
                    <p class="s-tetes-group-note">Memakai Lereng Blend, sangrai medium</p>
                    <ul class="s-tetes-list">
                        <li><span>Espresso</span><span class="s-tetes-price">Rp25rb</span></li>
                        <li><span>Americano</span><span class="s-tetes-price">Rp28rb</span></li>
                        <li><span>Flat white</span><span class="s-tetes-price">Rp38rb</span></li>
                        <li><span>Cappuccino</span><span class="s-tetes-price">Rp38rb</span></li>
                        <li><span>Kopi susu gula aren</span><span class="s-tetes-price">Rp32rb</span></li>
                        <li><span>Espresso tonic</span><span class="s-tetes-price">Rp40rb</span></li>
                    </ul>
                </div>
                <div class="s-tetes-group" data-fx="" style="--i: 1;">
                    <div class="s-tetes-group-fig">
                        <div class="s-img s-tone-2 s-has-img s-tetes-group-img rk-i11"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1559761340-fd33fa6286c5?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                        </div>
                    </div>
                    <h3>Seduh manual &amp; dingin</h3>
                    <p class="s-tetes-group-note">Biji berganti mengikuti musim panen</p>
                    <ul class="s-tetes-list">
                        <li><span>V60 Flores Bajawa</span><span class="s-tetes-price">Rp42rb</span></li>
                        <li><span>V60 Kerinci natural</span><span class="s-tetes-price">Rp45rb</span></li>
                        <li><span>Kalita Gayo</span><span class="s-tetes-price">Rp40rb</span></li>
                        <li><span>Cold brew Kerinci</span><span class="s-tetes-price">Rp36rb</span></li>
                        <li><span>Seduh es Flores Bajawa</span><span class="s-tetes-price">Rp42rb</span></li>
                    </ul>
                </div>
                <div class="s-tetes-group" data-fx="" style="--i: 2;">
                    <div class="s-tetes-group-fig">
                        <div class="s-img s-tone-3 s-has-img s-tetes-group-img rk-i12"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1599940778173-e276d4acb2bb?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                        </div>
                    </div>
                    <h3>Roti &amp; kue</h3>
                    <p class="s-tetes-group-note">Dipanggang setiap pagi, biasanya habis sebelum sore</p>
                    <ul class="s-tetes-list">
                        <li><span>Croissant mentega</span><span class="s-tetes-price">Rp28rb</span></li>
                        <li><span>Roti kayu manis</span><span class="s-tetes-price">Rp30rb</span></li>
                        <li><span>Kue pisang panggang</span><span class="s-tetes-price">Rp26rb</span></li>
                        <li><span>Kukis cokelat garam laut</span><span class="s-tetes-price">Rp18rb</span></li>
                    </ul>
                </div>
            </div>
            <p class="s-tetes-menu-note">Harga sudah termasuk pajak. Susu oat tambah Rp8rb. Seduh manual memakai
                biji yang sedang ada di rak.</p>
        </div>
    </section>

    <!-- Tentang -->
    <section class="s-tetes-split" id="tentang">
        <div class="s-tetes-split-copy">
            <div class="s-tetes-split-in">
                <h2 class="s-h2 s-tetes-h2">Kami kenal petani di balik setiap karung</h2>
                <p class="s-tetes-text">Setiap musim panen kami datang ke kebun di Bajawa, Kerinci, dan Gayo untuk
                    mencicipi dan memilih langsung. Biji mentahnya kami sangrai sendiri dalam batch 12 kilo, dan
                    profil tiap batch dicatat sebelum dijual.</p><a class="s-btn s-btn-ghost s-tetes-btn-line"
                    href="#blog">Baca catatan dari kebun</a>
            </div>
        </div>
        <div class="s-tetes-split-fig">
            <div class="s-img s-has-img s-tetes-zoom rk-i13"
                style="background-image: url(&quot;https://images.unsplash.com/photo-1662559102063-a665b04771fd?auto=format&amp;fit=crop&amp;w=1600&amp;q=70&quot;);">
            </div>
        </div>
    </section>

    <!-- Kedai -->
    <section class="s-tetes-sec s-tetes-shops" id="kontak">
        <div class="s-wrap s-tetes-wrap s-tetes-shops-in">
            <div class="s-tetes-shops-copy">
                <h2 class="s-h2 s-tetes-h2">Dua kedai dan satu roastery</h2>
                <p class="s-tetes-text">Semua kedai menyeduh biji yang sama dari roastery kami. Cupping terbuka
                    setiap Sabtu pagi di roastery, gratis dan tanpa daftar.</p><a
                    class="s-btn s-btn-ghost s-tetes-btn-line" href="#">Tanya lewat WhatsApp</a>
                <ul class="s-tetes-shops-list">
                    <li>
                        <p class="s-tetes-label"><b aria-hidden="true">01</b><span>Kedai
                                pertama</span><span>Kemang</span></p>
                        <p>Jl. Kemang Raya No. 27, Mampang Prapatan, Jakarta Selatan 12730</p>
                        <p><span>Setiap hari, 10.00–22.00</span><span>(021) 2765 8812</span></p><a class="s-tetes-under"
                            href="#">Petunjuk arah</a>
                    </li>
                    <li>
                        <p class="s-tetes-label"><b aria-hidden="true">02</b><span>Kedai
                                kedua</span><span>Bintaro</span></p>
                        <p>Jl. Bintaro Utama 3A No. 8, Tangerang Selatan 15225</p>
                        <p><span>Setiap hari, 08.00–22.00</span><span>(021) 7486 2210</span></p><a class="s-tetes-under"
                            href="#">Petunjuk arah</a>
                    </li>
                    <li>
                        <p class="s-tetes-label"><b aria-hidden="true">03</b><span>Roastery &amp; kelas
                                seduh</span><span>Cilandak</span></p>
                        <p>Jl. Cilandak KKO No. 15, Jakarta Selatan 12560</p>
                        <p><span>Senin–Sabtu, 07.00–17.00</span><span>0812 2765 8813</span></p><a class="s-tetes-under"
                            href="#">Petunjuk arah</a>
                    </li>
                </ul>
            </div>
            <div class="s-tetes-shops-fig">
                <div class="s-img s-has-img s-tetes-zoom rk-i14"
                    style="background-image: url(&quot;https://images.unsplash.com/photo-1646624867902-b970108e9137?auto=format&amp;fit=crop&amp;w=1400&amp;q=70&quot;);">
                </div>
            </div>
        </div>
    </section>

    <!-- Langganan -->
    <section class="s-tetes-sec s-tetes-cta" id="cta">
        <div class="s-wrap s-tetes-wrap s-tetes-cta-in">
            <div class="s-tetes-cta-fig">
                <div class="s-img s-has-img s-tetes-zoom rk-i15"
                    style="background-image: url(&quot;https://images.unsplash.com/photo-1561986810-4f3ba2f46ceb?auto=format&amp;fit=crop&amp;w=1400&amp;q=70&quot;);">
                </div>
            </div>
            <div class="s-tetes-cta-copy">
                <h2 class="s-h2 s-tetes-h2">Langganan biji, datang tiap dua minggu</h2>
                <p class="s-tetes-text">Pilih satu biji atau biarkan kami yang memilih. Dikirim dua atau empat
                    minggu sekali dengan potongan 10% dan gratis ongkir. Bisa dijeda atau dihentikan kapan saja.</p>
                <a class="s-btn s-btn-ghost s-tetes-btn-line" href="#">Atur langganan lewat WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- Jurnal -->
    <section class="s-tetes-sec s-tetes-blog" id="blog">
        <div class="s-wrap s-tetes-wrap">
            <h2 class="s-h2 s-tetes-h2">Catatan dari kebun dan roastery</h2>
            <div class="s-tetes-posts"><a href="#" class="s-tetes-post" data-fx="" style="--i: 0;">
                    <div class="s-tetes-post-fig">
                        <div class="s-img s-tone-0 s-has-img s-tetes-post-img rk-i16"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1677125671399-65852c6dfb05?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                        </div>
                    </div>
                    <div class="s-tetes-post-copy"><span class="s-tetes-label">Kebun</span>
                        <h3>Panen Flores Bajawa tahun ini</h3>
                        <p class="s-tetes-post-meta"><span>19 Sep 2026</span><span>6 menit baca</span></p><span
                            class="s-tetes-under"><span>Baca catatan</span></span>
                    </div>
                </a><a href="#" class="s-tetes-post" data-fx="" style="--i: 1;">
                    <div class="s-tetes-post-fig">
                        <div class="s-img s-tone-1 s-has-img s-tetes-post-img rk-i17"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1516510516159-156347b3cf2b?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                        </div>
                    </div>
                    <div class="s-tetes-post-copy"><span class="s-tetes-label">Resep</span>
                        <h3>Resep V60 kami: 15 gram, 250 ml, tiga menit</h3>
                        <p class="s-tetes-post-meta"><span>10 Sep 2026</span><span>4 menit baca</span></p><span
                            class="s-tetes-under"><span>Baca catatan</span></span>
                    </div>
                </a><a href="#" class="s-tetes-post" data-fx="" style="--i: 2;">
                    <div class="s-tetes-post-fig">
                        <div class="s-img s-tone-2 s-has-img s-tetes-post-img rk-i18"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1537130508299-46ab547b4be3?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                        </div>
                    </div>
                    <div class="s-tetes-post-copy"><span class="s-tetes-label">Sangrai</span>
                        <h3>Kenapa biji kami disangrai medium</h3>
                        <p class="s-tetes-post-meta"><span>1 Sep 2026</span><span>5 menit baca</span></p><span
                            class="s-tetes-under"><span>Baca catatan</span></span>
                    </div>
                </a><a href="#" class="s-tetes-post" data-fx="" style="--i: 3;">
                    <div class="s-tetes-post-fig">
                        <div class="s-img s-tone-3 s-has-img s-tetes-post-img rk-i19"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1652007762843-131e95e453d2?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                        </div>
                    </div>
                    <div class="s-tetes-post-copy"><span class="s-tetes-label">Tips</span>
                        <h3>Menyimpan biji supaya tetap segar</h3>
                        <p class="s-tetes-post-meta"><span>23 Agu 2026</span><span>3 menit baca</span></p><span
                            class="s-tetes-under"><span>Baca catatan</span></span>
                    </div>
                </a></div>
        </div>
    </section>

    <!-- Galeri -->
    <section class="s-tetes-sec s-tetes-gal" id="galeri">
        <div class="s-wrap s-tetes-wrap">
            <div class="s-tetes-slider"><input class="s-radio" id="_r_1_g0" aria-label="Kebun kopi di lereng Bajawa"
                    type="radio" checked="" name="_r_1_"><input class="s-radio" id="_r_1_g1"
                    aria-label="Mengecek warna biji di tengah sangrai" type="radio" name="_r_1_"><input
                    class="s-radio" id="_r_1_g2" aria-label="Cupping terbuka setiap Sabtu pagi" type="radio"
                    name="_r_1_"><input class="s-radio" id="_r_1_g3" aria-label="Seduh manual di bar kedai"
                    type="radio" name="_r_1_"><input class="s-radio" id="_r_1_g4"
                    aria-label="Es kopi susu pesanan siang" type="radio" name="_r_1_"><input class="s-radio"
                    id="_r_1_g5" aria-label="Kedai kedua, lantai dasar" type="radio" name="_r_1_">
                <div class="s-tetes-slides">
                    <figure class="s-tetes-slide">
                        <div class="s-img s-tone-0 s-has-img s-tetes-slide-img rk-i20"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1761784891269-9c6cc40956d2?auto=format&amp;fit=crop&amp;w=1600&amp;q=70&quot;);">
                        </div>
                        <figcaption><span>Kebun kopi di lereng Bajawa</span></figcaption>
                    </figure>
                    <figure class="s-tetes-slide">
                        <div class="s-img s-tone-1 s-has-img s-tetes-slide-img rk-i21"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1606310553667-8f636527a0e7?auto=format&amp;fit=crop&amp;w=1600&amp;q=70&quot;);">
                        </div>
                        <figcaption><span>Mengecek warna biji di tengah sangrai</span></figcaption>
                    </figure>
                    <figure class="s-tetes-slide">
                        <div class="s-img s-tone-2 s-has-img s-tetes-slide-img rk-i22"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1558996163-68db2afefba6?auto=format&amp;fit=crop&amp;w=1600&amp;q=70&quot;);">
                        </div>
                        <figcaption><span>Cupping terbuka setiap Sabtu pagi</span></figcaption>
                    </figure>
                    <figure class="s-tetes-slide">
                        <div class="s-img s-tone-3 s-has-img s-tetes-slide-img rk-i23"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1581068106158-a432387dbbae?auto=format&amp;fit=crop&amp;w=1600&amp;q=70&quot;);">
                        </div>
                        <figcaption><span>Seduh manual di bar kedai</span></figcaption>
                    </figure>
                    <figure class="s-tetes-slide">
                        <div class="s-img s-tone-0 s-has-img s-tetes-slide-img rk-i24"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1777620817565-1f0802f12b3f?auto=format&amp;fit=crop&amp;w=1600&amp;q=70&quot;);">
                        </div>
                        <figcaption><span>Es kopi susu pesanan siang</span></figcaption>
                    </figure>
                    <figure class="s-tetes-slide">
                        <div class="s-img s-tone-1 s-has-img s-tetes-slide-img rk-i25"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1751151015819-671ae8243e97?auto=format&amp;fit=crop&amp;w=1600&amp;q=70&quot;);">
                        </div>
                        <figcaption><span>Kedai kedua, lantai dasar</span></figcaption>
                    </figure>
                </div>
                <div class="s-tetes-pick"><label for="_r_1_g0"><i class="s-tetes-drop" aria-hidden="true"></i><b
                            aria-hidden="true">01</b></label><label for="_r_1_g1"><i class="s-tetes-drop"
                            aria-hidden="true"></i><b aria-hidden="true">02</b></label><label for="_r_1_g2"><i
                            class="s-tetes-drop" aria-hidden="true"></i><b aria-hidden="true">03</b></label><label
                        for="_r_1_g3"><i class="s-tetes-drop" aria-hidden="true"></i><b
                            aria-hidden="true">04</b></label><label for="_r_1_g4"><i class="s-tetes-drop"
                            aria-hidden="true"></i><b aria-hidden="true">05</b></label><label for="_r_1_g5"><i
                            class="s-tetes-drop" aria-hidden="true"></i><b aria-hidden="true">06</b></label>
                </div>
            </div>
            <div class="s-tetes-center">
                <h2 class="s-h2 s-tetes-h2">Dari kebun sampai ke cangkir</h2>
                <p class="s-tetes-text">Enam foto dari satu putaran kerja kami: panen, sangrai, cupping, lalu seduh
                    di bar.</p><a class="s-btn s-btn-ghost s-tetes-btn-line" href="#kontak">Cari kedai
                    terdekat</a>
            </div>
        </div>
    </section>

    <!-- Tanya jawab -->
    <section class="s-tetes-sec s-tetes-faq" id="faq">
        <div class="s-wrap s-tetes-wrap s-tetes-faq-in">
            <div class="s-tetes-faq-side">
                <h2 class="s-h2 s-tetes-h2">Tentang kopi dan pesanan</h2>
                <p class="s-tetes-text">Belum terjawab? Barista kami membalas WhatsApp setiap hari selama jam buka
                    kedai.</p><a class="s-btn s-btn-ghost s-tetes-btn-line" href="#">Tanya lewat
                    WhatsApp</a>
            </div>
            <div class="s-tetes-faq-list">
                <details class="s-tetes-q" open="">
                    <summary><b aria-hidden="true">01</b><span>Kapan biji kopi disangrai?</span><i class="s-tetes-drop"
                            aria-hidden="true"></i></summary>
                    <p>Setiap Senin dan Kamis. Pesanan dikirim paling lambat tiga hari setelah disangrai, dan
                        tanggal sangrainya tertulis di kantong.</p>
                </details>
                <details class="s-tetes-q">
                    <summary><b aria-hidden="true">02</b><span>Gilingan apa yang sebaiknya saya pilih?</span><i
                            class="s-tetes-drop" aria-hidden="true"></i></summary>
                    <p>Pilih biji utuh bila Anda punya penggiling. Kalau tidak, sebutkan alat seduh Anda saat
                        memesan dan kami giling sesuai alat itu.</p>
                </details>
                <details class="s-tetes-q">
                    <summary><b aria-hidden="true">03</b><span>Berapa lama biji kopi tetap segar?</span><i
                            class="s-tetes-drop" aria-hidden="true"></i></summary>
                    <p>Paling enak 1 sampai 5 minggu setelah tanggal sangrai. Simpan di kantong aslinya, tertutup
                        rapat, jauh dari sinar matahari.</p>
                </details>
                <details class="s-tetes-q">
                    <summary><b aria-hidden="true">04</b><span>Bagaimana cara berlangganan?</span><i class="s-tetes-drop"
                            aria-hidden="true"></i></summary>
                    <p>Kirim pesan WhatsApp, sebutkan biji dan jadwalnya: dua atau empat minggu sekali. Langganan
                        mendapat potongan 10% dan gratis ongkir.</p>
                </details>
                <details class="s-tetes-q">
                    <summary><b aria-hidden="true">05</b><span>Apakah menjual untuk kafe dan kantor?</span><i
                            class="s-tetes-drop" aria-hidden="true"></i></summary>
                    <p>Ya. Kami memasok biji untuk kafe dan kantor mulai 5 kg per bulan. Ceritakan alat seduh Anda,
                        kami kirim sampel tiga biji.</p>
                </details>
                <details class="s-tetes-q">
                    <summary><b aria-hidden="true">06</b><span>Apakah ada kelas seduh?</span><i class="s-tetes-drop"
                            aria-hidden="true"></i></summary>
                    <p>Cupping terbuka gratis setiap Sabtu pagi di roastery. Kelas seduh manual dua jam diadakan
                        sebulan sekali, jadwalnya kami kabari lewat email.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- Ulasan -->
    <section class="s-tetes-sec s-tetes-quotes" id="testimoni">
        <div class="s-wrap s-tetes-wrap">
            <h2 class="s-h2 s-tetes-h2 s-tetes-quotes-h">Kata yang sudah mencoba</h2>
        </div>
        <div class="s-tetes-run" tabindex="0">
            <figure class="s-tetes-quote" style="--i: 0;">
                <h3>Langganan Lereng Blend</h3>
                <blockquote><span>Sudah dua bulan berlangganan. Bijinya selalu sampai tiga hari setelah tanggal
                        sangrai yang tertulis di kantong.</span></blockquote>
                <figcaption><span>Anindya Putri</span><b aria-hidden="true">01</b></figcaption>
            </figure>
            <figure class="s-tetes-quote" style="--i: 1;">
                <h3>V60 Flores Bajawa</h3>
                <blockquote><span>Baristanya menuliskan resep seduhnya di struk, jadi saya bisa mengulanginya di
                        rumah akhir pekan itu.</span></blockquote>
                <figcaption><span>Rizky Ramadhan</span><b aria-hidden="true">02</b></figcaption>
            </figure>
            <figure class="s-tetes-quote" style="--i: 2;">
                <h3>Kerinci natural 200 g</h3>
                <blockquote><span>Saya minta digiling untuk French press. Gilingannya pas, dan waktu sampai umur
                        sangrainya baru empat hari.</span></blockquote>
                <figcaption><span>Maria Tanoto</span><b aria-hidden="true">03</b></figcaption>
            </figure>
            <figure class="s-tetes-quote" style="--i: 3;">
                <h3>Cold brew untuk kantor</h3>
                <blockquote><span>Kami pesan cold brew untuk pantry kantor setiap Senin. Sejauh ini selalu diantar
                        sebelum pukul sembilan.</span></blockquote>
                <figcaption><span>Hendra Gunawan</span><b aria-hidden="true">04</b></figcaption>
            </figure>
            <figure class="s-tetes-quote" style="--i: 4;">
                <h3>Cupping hari Sabtu</h3>
                <blockquote><span>Datang tanpa tahu apa-apa soal kopi. Pulang dari cupping saya sudah bisa
                        membedakan proses natural dan washed.</span></blockquote>
                <figcaption><span>Nur Aisyah</span><b aria-hidden="true">05</b></figcaption>
            </figure>
            <figure class="s-tetes-quote" style="--i: 5;">
                <h3>Flat white</h3>
                <blockquote><span>Susunya tipis dan tidak terlalu panas. Ini yang saya pesan setiap mampir sebelum
                        berangkat kerja.</span></blockquote>
                <figcaption><span>Kevin Wijaya</span><b aria-hidden="true">06</b></figcaption>
            </figure>
        </div>
    </section>
@endsection
