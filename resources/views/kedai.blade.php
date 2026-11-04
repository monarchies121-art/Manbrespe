@extends('layouts.app')
@section('judul', 'dibikin asal tapi keenakan')
@section('konten')
<section class="s-tetes-sec s-tetes-pagehead">
            <div class="s-wrap s-tetes-wrap">
                <p class="s-tetes-label"><b>Kopi Lereng</b><span>Kedai</span></p>
                <h1 class="s-h1 s-tetes-h1">Mampir ke kedai kami</h1>
                <p class="s-tetes-text">Dua kedai dan satu roastery. Semuanya menyeduh biji yang sama dari sangrai kami
                    sendiri.</p>
            </div>
        </section>

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
                            <p><span>Setiap hari, 10.00–22.00</span><span>(021) 2765 8812</span></p><a
                                class="s-tetes-under" href="#">Petunjuk arah</a>
                        </li>
                        <li>
                            <p class="s-tetes-label"><b aria-hidden="true">02</b><span>Kedai
                                    kedua</span><span>Bintaro</span></p>
                            <p>Jl. Bintaro Utama 3A No. 8, Tangerang Selatan 15225</p>
                            <p><span>Setiap hari, 08.00–22.00</span><span>(021) 7486 2210</span></p><a
                                class="s-tetes-under" href="#">Petunjuk arah</a>
                        </li>
                        <li>
                            <p class="s-tetes-label"><b aria-hidden="true">03</b><span>Roastery &amp; kelas
                                    seduh</span><span>Cilandak</span></p>
                            <p>Jl. Cilandak KKO No. 15, Jakarta Selatan 12560</p>
                            <p><span>Senin–Sabtu, 07.00–17.00</span><span>0812 2765 8813</span></p><a
                                class="s-tetes-under" href="#">Petunjuk arah</a>
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

        <section class="s-tetes-sec s-tetes-faq" id="faq">
            <div class="s-wrap s-tetes-wrap s-tetes-faq-in">
                <div class="s-tetes-faq-side">
                    <h2 class="s-h2 s-tetes-h2">Tentang kopi dan pesanan</h2>
                    <p class="s-tetes-text">Belum terjawab? Barista kami membalas WhatsApp setiap hari selama jam buka
                        kedai.</p><a class="s-btn s-btn-ghost s-tetes-btn-line" href="#">Tanya lewat WhatsApp</a>
                </div>
                <div class="s-tetes-faq-list">
                    <details class="s-tetes-q" open="">
                        <summary><b aria-hidden="true">01</b><span>Kapan biji kopi disangrai?</span><i
                                class="s-tetes-drop" aria-hidden="true"></i></summary>
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
                        <summary><b aria-hidden="true">04</b><span>Bagaimana cara berlangganan?</span><i
                                class="s-tetes-drop" aria-hidden="true"></i></summary>
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
                        <summary><b aria-hidden="true">06</b><span>Apakah ada kelas seduh?</span><i
                                class="s-tetes-drop" aria-hidden="true"></i></summary>
                        <p>Cupping terbuka gratis setiap Sabtu pagi di roastery. Kelas seduh manual dua jam diadakan
                            sebulan sekali, jadwalnya kami kabari lewat email.</p>
                    </details>
                </div>
            </div>
        </section>

        <!-- Bagian bawah (disalin dari homepage) -->
    @endsection
